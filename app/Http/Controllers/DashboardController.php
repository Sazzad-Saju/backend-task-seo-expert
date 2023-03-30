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
        $data['users'] = User::latest()->get();
        $user_exist = User::where('id',$id)->get();
        // return $user_exist;
        $data['user_email'] = $user_exist[0]->email;
        return view('dashboard', $data);
    }

    public function filter(Request $request){ 
        $users = User::where('name', 'like', '%'. $request->searchField.'%')
            ->orWhere('title', 'like', '%'.$request->searchField.'%')
            ->orWhere('company','like','%'.$request->searchField.'%')
            ->latest()->get();
        
        foreach($users as $user){
            $user->decrement('credit');
            // $user->credit = intval($user->credit) - 1;
            // $user->save();
        }

         Toastr::success('One credit deducted for the resulted users!', "Credit Deduction");
        return view('dashboard',['users' => $users]);

        
    }

    public function download(Request $request){ 

        $fileName = 'users.csv';
        $users = User::whereIn('id', $request->userIds)->get();

        

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Name');

        $callback = function() use($users, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($users as $user) {
                $row['Name']  = $user->name;

                fputcsv($file, array($row['Name']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
