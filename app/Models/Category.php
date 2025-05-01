<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    protected $fillable = ['name', 'slug', 'parent_id', 'enabled'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
