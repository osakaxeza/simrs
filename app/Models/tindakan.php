<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
    protected $table = 'tindakan';
    protected $primaryKey = 'id_tindakan';
    public $timestamps = false;

    protected $fillable = [
        'nama_tindakan', 'harga', 'id_poli'
    ];
}
