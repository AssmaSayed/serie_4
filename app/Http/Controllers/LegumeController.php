<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class LegumeController extends Controller
{
    public function index(){
        $legume = Legume::all();

        return view('page.legume',compact('legume'));
    }
}
