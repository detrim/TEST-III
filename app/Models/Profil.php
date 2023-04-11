<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'Profil';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'profil',
        'email',
        'alamat',
        'tempatlahir',
        'tgllahir',
        'pendidikan',
        'tahunmasuk',
        'tahunlulus',
        'studi',
        'uni',
        'ipk',
        'photo',
        'passion',
    ];
}