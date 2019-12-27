<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waris extends Model
{
    protected $table = 'data_ahliwaris';
    protected $fillable = ['namaAW','id_nasabah','jenIdentitasAW','noIndentitasAW','hubungan','ibuKandung','alamatAW'];
    protected $primarykey = 'id_ahliwaris';
}
