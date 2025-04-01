<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    /** @use HasFactory<\Database\Factories\FactFactory> */
    use HasFactory;

    protected $fillable = [
        'fun_facts'
    ];
}
