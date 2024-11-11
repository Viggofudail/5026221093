<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrController extends Controller
{

    public function week1(){
        return view ('week1');
    }

    public function week2(){
        return view ('week2');
    }

    public function week3(){
        return view ('week3');
    }

    public function linktree(){
        return view ('linktree');
    }

    public function tm1(){
        return view ('tugasmandiri1');
    }

    public function ets(){
        return view ('index');
    }

    public function about(){
        return view ('about');
    }

    public function contact(){
        return view ('contact');
    }

    public function pricing(){
        return view ('pricing');
    }

    public function faq(){
        return view ('faq');
    }

}

