<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    use HasFactory;
    protected $fillable = [
            
        "n1",
        "n2",
        "operation",
        "result",




    ];
}
