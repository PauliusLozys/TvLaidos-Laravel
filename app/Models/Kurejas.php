<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurejas extends Model
{
    use HasFactory;
    protected $table = 'kurejas';
    protected $fillable = ['vardas','pavarde','role','lytis','id_KUREJAS'];
    public $timestamps = false;
}
