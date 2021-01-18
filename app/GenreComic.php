<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreComic extends Model
{
    protected $fillable = ['id_komik','id_genre'];

    public function komik()
    {
        return $this->belongsTo(Komik::class,'id_komik');
    }

    public function genre()
    {
        return $this->belongsTo(Komik::class,'id_genre');
    }
}
