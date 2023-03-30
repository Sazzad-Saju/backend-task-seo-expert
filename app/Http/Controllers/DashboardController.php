<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
    public $selected_peoples = [];
    public $selectAll = false;

    public function index(){
        $data['users'] = User::latest()->get();
        // return $data;
        return view('dashboard', $data);
    }

    public function access($id){
        $admin_credit = DB::table('users')
        ->where('id',1)
        ->select('credit')
        ->get();
        
        dd($admin);

        // $peoples = DB::table('people')->get();
    }

    public function filter(Request $request){ 
        $users = User::where('name', 'like', '%'. $request->searchField.'%')
            ->orWhere('title', 'like', '%'.$request->searchField.'%')
            ->orWhere('company','like','%'.$request->searchField.'%')
            ->latest()->get();
        
        foreach($users as $user){
            $user->credit = intval($user->credit) - 1;
            $user->save();
        }

        Toastr::success('Credit deducted for the resulted users!', "Credit Deduction");
        return view('dashboard',['users' => $users]);

        
    }
}
