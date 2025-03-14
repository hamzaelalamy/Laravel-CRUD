<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niinja extends Model
{
    protected $fillable = ['name', 'email', 'skill', 'dojo_id']; 
    /** @use HasFactory<\Database\Factories\NiinjaFactory> */
    use HasFactory;

    public function dojo() {
        return $this->belongsTo(Dojo::class);
    }
}
