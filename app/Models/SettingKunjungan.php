<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingKunjungan extends Model
{
    use HasFactory;

    protected $table = 'tb_setting_kunjungan';

    protected $fillable = [
        'jml_kunjungan', 'jml_tamu', 'hari_kunjungan', 'keterangan'
    ];

    protected $casts = [
        'created_at' => 'datetime: Y-m-d H:m:s',
        'updated_at' => 'datetime: Y-m-d H:m:s'
    ];
}
