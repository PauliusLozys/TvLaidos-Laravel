<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktorius extends Model
{
    use HasFactory;
    protected $table = 'aktorius';
    protected $fillable = ['vardas','pavarde','lytis','id_AKTORIUS ','fk_VEIKEJASid_VEIKEJAS '];
    public $timestamps = false;
}
