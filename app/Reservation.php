<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Reservation extends Model
{
    protected $fillable = [
        'username','debut_heure','fin_heur','jour','reserve','place'
    ];
}
