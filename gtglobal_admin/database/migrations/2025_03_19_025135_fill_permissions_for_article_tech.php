<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class FillPermissionsForArticleTech extends Migration
{
    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    protected $guardName;
    /**
     * @var array
     */
    protected $permissions;
    /**
     * @var array
     */
    protected $roles;

    /**
     * FillPermissionsForArticleTech constructor.
     */
    public function __construct()
    {
        $this->guardName = config('admin-auth.defaults.guard');

        $permissions = collect([
            'admin.article-tech',
            'admin.article.index-tech',
            'admin.article.create-tech',
            'admin.article.show-tech',
            'admin.article.edit-tech',
            'admin.article.delete-tech',
        ]);

        // Add New permissions
        $this->permissions = $permissions->map(function ($permission) {
            return [
                'name' => $permission,
                'guard_name' => $this->guardName,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];
        })->toArray();

        // Role should already exist
        $this->roles = [
            [
                'name' => 'Administrator',
                'guard_name' => $this->guardName,
                'permissions' => $permissions,
            ],
        ];
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function () {
            foreach ($this->permissions as $permission) {
                $permissionItem = DB::table('permissions')->where([
                    'name' => $permission['name'],
                    'guard_name' => $permission['guard_name']
                ])->first();
                if (is_null($permissionItem)) {
                    DB::table('permissions')->insert($permission);
                }
            }

            foreach ($this->roles as $role) {
                $permissions = $role['permissions'];
                unset($role['permissions']);

                $roleItem = DB::table('roles')->where([
                    'name' => $role['name'],
                    'guard_name' => $role['guard_name']
                ])->first();
                if (!is_null($roleItem)) {
                    $roleId = $roleItem->id;

                    $permissionItems = DB::table('permissions')->whereIn('name', $permissions)->where(
                        'guard_name',
                        $role['guard_name']
                    )->get();
                    foreach ($permissionItems as $permissionItem) {
                        $roleHasPermissionData = [
                            'permission_id' => $permissionItem->id,
                            'role_id' => $roleId
                        ];
                        $roleHasPermissionItem = DB::table('role_has_permissions')->where($roleHasPermissionData)->first();
                        if (is_null($roleHasPermissionItem)) {
                            DB::table('role_has_permissions')->insert($roleHasPermissionData);
                        }
                    }
                }
            }
        });
        app()['cache']->forget(config('permission.cache.key'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::transaction(function () {
            foreach ($this->permissions as $permission) {
                $permissionItem = DB::table('permissions')->where([
                    'name' => $permission['name'],
                    'guard_name' => $permission['guard_name']
                ])->first();
                if (!is_null($permissionItem)) {
                    DB::table('permissions')->where('id', $permissionItem->id)->delete();
                    DB::table('model_has_permissions')->where('permission_id', $permissionItem->id)->delete();
                }
            }
        });
        app()['cache']->forget(config('permission.cache.key'));
    }
}
