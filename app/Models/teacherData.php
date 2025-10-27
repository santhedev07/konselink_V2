<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacherData extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'teacher_id',
        'class_id',
        'email',
        'phone',
        'address'
    ];

    public function userId(){
        return $this->belongsTo(User::class);
    }

    public function  teacherClass(){
        return $this->belongsTo(dataClass::class);
    }
}
