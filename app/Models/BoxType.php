<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BoxType extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    public function lines(){
        return $this->hasMany(BoxTypeLine::class);
    }

}
