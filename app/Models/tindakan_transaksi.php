<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tindakan_transaksi extends Model
{
    protected $table = 'tindakan_transaksi';
    protected $primaryKey = 'id_tindakan_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'id_transaksi', 'id_tindakan', 'harga'
    ];
}
