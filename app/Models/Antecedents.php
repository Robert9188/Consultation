<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedents extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function patient(){

        return $this->belongsTo(Patient::class);
    }

    public function traitements(){

        return $this->hasMany(Traitements::class);
    }
}
