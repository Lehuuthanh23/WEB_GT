<?php

namespace App\Models;

use Brackets\Craftable\Traits\UpdatedByAdminUserTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use UpdatedByAdminUserTrait;


    protected $fillable = [
        "title",
        "perex",
        'image_url',
        "published_at",
        "enabled",
        "updated_by_admin_user_id",
        'description'
    ];
    protected $hidden = [

    ];

    protected $dates = [
        "published_at",
        "created_at",
        "updated_at",

    ];



    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/tin-tuc/'.$this->getKey());
    }
}
