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
    public function show($id){

        $show = Legume::find($id);
        return view('page.showFruit', compact('show'));
        }

}
