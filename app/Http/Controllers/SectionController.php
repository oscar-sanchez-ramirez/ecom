<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function lap(){
        return view('sections.lap');
    }
}
