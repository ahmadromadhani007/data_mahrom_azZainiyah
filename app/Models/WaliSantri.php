<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    protected $table = 'tb_wali_santri';

    protected $fillable = [
        'nama', 'alamat', 'no_hp', 'email', 'status'
    ];

    protected $casts = [
        'created_at' => 'datetime: Y-m-d H:m:s',
        'updated_at' => 'datetime: Y-m-d H:m:s'
    ];
}
