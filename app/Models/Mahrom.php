<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahrom extends Model
{
    use HasFactory;

    protected $table = 'tb_mahrom';

    protected $fillable = [
        'id', 'nama', 'alamat', 'daerah'
    ];

    protected $casts = [
        'created_at' => 'datetime: Y-m-d H:m:s',
        'updated_at' => 'datetime: Y-m-d H:m:s'
    ];
}
