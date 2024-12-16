<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageViewController extends Controller
{
    public function counter()
    {

        $viewCount = DB::table('viewcount')->first();

        if ($viewCount) {

            DB::table('viewcount')->where('ID', $viewCount->ID)->increment('jumlah');
        } else {

            DB::table('viewcount')->insert(['jumlah' => 1]);
        }


        $counter = DB::table('viewcount')->first();

        return view('counter', ['counter' => $counter]);
    }
}
