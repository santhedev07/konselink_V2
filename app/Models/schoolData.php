<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schoolData extends Model
{
    protected $fillable = [
        'school_name',
        'school_id',
        'address',
        'email',
        'phone'
    ];
}
