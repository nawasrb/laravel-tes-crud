<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'data_nasabah';
    protected $fillable = ['nama','tgl_lahir','alamat','kodePos','jenKel','jenIdentitas','noIdentitas','email','noTelfon','status'];
    protected $primaryKey = 'id_nasabah';
}
