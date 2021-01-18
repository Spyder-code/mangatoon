<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesComic extends Model
{
    protected $fillable = ['id_chapter','image','order'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class,'id_chapter');
    }
}
