<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;


class VistaController extends Controller
{
    public function index (){
        $ce = Text::all();
        return view ('vista',compact('ce'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
