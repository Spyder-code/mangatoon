<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    protected $table = 'komik';
    protected $fillable = [
        'id_user',
        'jenis',
        'status',
        'judul',
        'cover',
        'cover_banner',
        'deskripsi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
