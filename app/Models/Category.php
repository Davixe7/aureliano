<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name', 'slug', 'parent_id', 'enabled'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('media')->singleFile();
    }
}
