<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Brackets\AdminAuth\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Tạo tài khoản admin mặc định
        AdminUser::create([
            'first_name' => 'Admin',
            'last_name' => '',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1'),
            'activated' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Admin user created: admin@example.com / password');
    }
}
