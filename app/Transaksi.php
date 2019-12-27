<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_pegawai','noREK','setoranAwal', 'jenTRAK','tglTRAN','jumTRAN', 'saldo'];
    protected $primaryKey = 'id';
}
