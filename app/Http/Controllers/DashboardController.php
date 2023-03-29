<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $peoples = DB::table('people')->get();
        return view('dashboard')->with('peoples',$peoples);
    }
}
