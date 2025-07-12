<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    protected $table = 'kliniks';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'jenis',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'lat' => 'float',
        'long' => 'float',
    ];
}
