<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdAdmin',
        'Role',
        'Nama',
        'Password',
        'Email',
        'Instansi',
    ];

    protected $hidden = [
        'Password', // Sembunyikan password saat query
    ];

    protected $casts = [
        'Instansi' => 'array', // Jika data Instansi berbentuk JSON
    ];
}
