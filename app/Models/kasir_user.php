<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kasir_user extends Model
{
    protected $table = 'kasir_user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'username', 'password', 'role'
    ];
}
