<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bee extends Model
{
    use HasFactory;

    /* uso de todos los campo de Class */
    /* protected $fillable = ['name','ecogeography','ecosystem','latitude','weather','job_function']; */
    protected $guarded = [];

}
