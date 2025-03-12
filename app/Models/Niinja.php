<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niinja extends Model
{
    protected $fillable = ['name', 'email', 'skill']; 
    /** @use HasFactory<\Database\Factories\NiinjaFactory> */
    use HasFactory;
}
