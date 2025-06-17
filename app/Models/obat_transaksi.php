<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class obat_transaksi extends Model
{
    protected $table = 'obat_transaksi';
    protected $primaryKey = 'id_obat_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'id_transaksi', 'id_obat', 'jumlah', 'total_harga', 'id_resep'
    ];
}
