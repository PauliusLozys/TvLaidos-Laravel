<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvLaida extends Model
{
    use HasFactory;
    protected $table = 'tv_laida';
    public $timestamps = false;

    public function kurejai() {
        return $this->belongsToMany(Kurejas::class, 'kuria', 'fk_tv_laida', 'fk_kurejas' );
    }
}
