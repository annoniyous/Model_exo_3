<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(){
        $dataBase = Membre::all();

        return view('Welcom', compact('dataBase'));
    }
}
