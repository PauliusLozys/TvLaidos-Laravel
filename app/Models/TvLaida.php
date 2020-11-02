<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvLaida extends Model
{
    use HasFactory;
    protected $table = 'tv_laida';
    protected $fillable = ['pavadinimas','trukme','ziurovu_ivertinimas','aprasymas','id_TV_LAIDA'];
    public $timestamps = false;
}
