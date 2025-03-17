<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Author extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title'];

    protected $appends = [
        'abbr',
        'full_name',
        'first_name',
        'last_name',
        'email',
        'avatar_url'
    ];

    /* ************************ ACCESSOR ************************* */

    /**
     * @return string
     */
    public function getAbbrAttribute(): string
    {
        $nameArray = explode(" ", $this->title);

        if (isset($nameArray[1])) {
            return mb_strtoupper(mb_substr($nameArray[0], 0, 1)) . mb_strtoupper(mb_substr($nameArray[1], 0, 1));
        }

        return mb_substr($this->title, 0, 2);
    }

    public function getFullNameAttribute(): string
    {
        $nameArray = explode(" ", $this->title);

        if (isset($nameArray[1])) {
            return $nameArray[0] . ' ' . $nameArray[1];
        }

        return $this->title;
    }

    public function getFirstNameAttribute(): string
    {
        $nameArray = explode(" ", $this->title);

        if (isset($nameArray[0])) {
            return $nameArray[0];
        }

        return $this->title;
    }

    public function getLastNameAttribute(): string
    {
        $nameArray = explode(" ", $this->title);

        if (isset($nameArray[1])) {
            return $nameArray[1];
        }

        return $this->title;
    }

    public function getEmailAttribute(): string
    {
        $nameArray = explode(" ", $this->title);

        if (isset($nameArray[1])) {
            return strtolower($nameArray[0]) . '.' . strtolower($nameArray[1]) . '@getcraftable.com';
        }

        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrlAttribute()
    {
        return $this->getFirstMediaUrl('photo', 'thumb_square') ?: false;
    }

    /* ************************ MEDIA ************************ */

    /**
     * Đăng ký collection ảnh đại diện (photo)
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photo')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif']);
    }

    /**
     * Đăng ký conversion ảnh
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb_square')
            ->width(60)
            ->height(60)
            ->crop(Manipulations::CROP_CENTER, 60, 60)
            ->performOnCollections('photo')
            ->nonQueued();

        $this->addMediaConversion('medium_square')
            ->width(160)
            ->height(160)
            ->crop(Manipulations::CROP_CENTER, 160, 160)
            ->performOnCollections('photo')
            ->nonQueued();

        $this->addMediaConversion('detail_square')
            ->width(400)
            ->height(400)
            ->crop(Manipulations::CROP_CENTER, 400, 400)
            ->performOnCollections('photo')
            ->nonQueued();
    }

    /* ************************ RELATIONS ************************* */

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function articlesWithRelationships()
    {
        return $this->hasMany(ArticlesWithRelationship::class);
    }
}
