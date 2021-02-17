<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $fruit = Fruit::all();

        return view('page.fruit', compact('fruit'));
    }
    public function show($id){

        $show = Fruit::find($id);
        return view('page.showFruit', compact('show'));
        }
};
