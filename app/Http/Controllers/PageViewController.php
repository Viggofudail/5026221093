<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageViewController extends Controller
{
    public function counter()
    {
        // Check if the record exists, otherwise create it
        $viewCount = DB::table('viewcount')->first();

        if ($viewCount) {
            // Increment the count if the record exists
            DB::table('viewcount')->where('id', $viewCount->id)->increment('jumlah');
        } else {
            // Create a new record with an initial count of 1
            DB::table('viewcount')->insert(['jumlah' => 1]);
        }


        $counter = DB::table('viewcount')->first();

        return view('counter', ['counter' => $counter]);
    }
}
