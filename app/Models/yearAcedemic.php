<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class yearAcedemic extends Model
{
    protected $fillable = [
        'year_periode',
        'semester',
        'status'
    ];

    public function dataGrades(){
        return $this->hasMany(dataClass::class);
    }
}
