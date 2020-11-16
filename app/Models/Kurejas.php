<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurejas extends Model
{
    use HasFactory;
    protected $table = 'kurejas';
    public $timestamps = false;

    public function tvLaida() {
        return $this->belongsTo('App\Models\TvLaida', 'fk_tv_laida');
    }
}
