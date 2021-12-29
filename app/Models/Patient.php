<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];
    

    public function consultations(){
        
        return $this->hasMany(Consultation::class);
    }

    public function bilans(){

        return $this->hasMany(Bilans::class);
    }

    public function antecedents(){

        return $this->hasMany(Antecedents::class);
    }

    public function antecedent_familliaux(){

        return $this->hasMany(Antecedent_familliaux::class);
    }
}
