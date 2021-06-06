<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    public function Trabajo(){
        return $this->belongsTo('App\Models\Trabajo');
    }
}
