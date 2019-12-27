<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'data_pegawai';
    protected $fillable = ['nama','tgl_lahir','alamat','kodePos','jenKel','jenIdentitas','noIdentitas','email','noTelfon','status'];
    protected $primaryKey = 'id_pegawai';
}
