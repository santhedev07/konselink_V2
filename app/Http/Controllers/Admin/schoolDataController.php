<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\schoolData;
use Illuminate\Http\Request;

class schoolDataController extends Controller
{
    public function index()
    {
        $data = schoolData::all();
        return view('admins.schools.index', compact('data'));
    }
}
