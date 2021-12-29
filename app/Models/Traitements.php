<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitements extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function antecedent(){

        return $this->belongsTo(Antecedents::class);
    }
}

