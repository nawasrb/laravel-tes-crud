<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    protected $table = 'rekening';
    protected $fillable = ['id_nasabah','noREK','tglBuka','statusREK'];
    protected $primaryKey = 'id';
}
