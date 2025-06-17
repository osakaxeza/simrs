<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'no_registrasi', 'tanggal_bayar', 'total_tagihan', 'status'
    ];

}
