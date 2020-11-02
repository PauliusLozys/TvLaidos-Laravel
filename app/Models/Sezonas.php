<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sezonas extends Model
{
    use HasFactory;
    protected $table = 'sezonas';
    protected $fillable = ['sezono_nr','sezono_ivertinimas','epizodu_sk','id_SEZONAS','fk_TV_LAIDAid_TV_LAIDA'];
    public $timestamps = false;
}
