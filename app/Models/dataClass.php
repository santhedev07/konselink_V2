<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataClass extends Model
{
    protected $fillable = [
        'grade',
        'major',
        'class',
        'yearAc_id'
    ];

    public function studentsData(){
        return $this->hasMany(studentsData::class);
    }

    public function getStatus(){
        $year_academic = $this->year_academic;

        if($year_academic && $year_academic->status == 1){
            return 'Active';
        }

        return 'Non Active';
    }
}
