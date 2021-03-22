<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{

    protected $primaryKey = 'id_programs';
    public $incrementing = false;
    protected $fillable = [
       'id_programs', 'username','debut_heure','fin_heur','jour','reserve','place'
    ];

    
}
