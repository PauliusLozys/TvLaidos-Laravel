<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veikejas extends Model
{
    use HasFactory;
    protected $table = 'veikejas';
    protected $fillable = ['vardas','id_VEIKEJAS','fk_TV_LAIDAid_TV_LAIDA'];
    public $timestamps = false;
}
