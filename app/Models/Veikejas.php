<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veikejas extends Model
{
    use HasFactory;
    protected $table = 'veikejas';
    public $timestamps = false;

    public function tvLaida() {
        return $this->belongsTo('App\Models\TvLaida', 'fk_tv_laida');
    }

    public function aktorius() {
        return $this->belongsTo('App\Models\Aktorius', 'fk_aktorius');
    }
}
