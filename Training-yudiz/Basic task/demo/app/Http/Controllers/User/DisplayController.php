<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DisplayController extends Controller
{
    public function display(Request $request){
        $user_data = User::where('id',$request->user_id)->where('is_active','1')->get();
        // dd($user_data);
        $user_data = User::all();
        // // dd($user_data);
        return  view('Users.view',compact('user_data'));
    }
}
