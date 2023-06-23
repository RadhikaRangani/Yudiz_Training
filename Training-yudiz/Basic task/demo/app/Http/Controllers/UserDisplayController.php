<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserDisplayController extends Controller
{
    public function display(){
        // dd("hii");
        $user_data = User::all();
        // dd($user_data);
        return  view('Users.show',compact('user_data'));
    }
}
