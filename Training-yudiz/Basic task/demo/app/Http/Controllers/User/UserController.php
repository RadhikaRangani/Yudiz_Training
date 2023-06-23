<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    // public function display(Request $request){

    //         // $user_data = User::where('id',$request->user_id)->where('is_active','1')->get();
    //         // dd($user_data);
    //         $user_data = User::all();
    //         // dd($user_data);
    //         return  view('Users.view',compact('user_data'));
    //     }
        public function show(Request $request,$user_id){
            // dd("hii");
            $user_data = User::where('id',$user_id)->where('is_active','1')->get();
            // dd($user_data);
            // return redirect()->route('show',compact('user_data'));
            return view('Users.view',compact('user_data'));
        }

        public function submit(StorUserRequest $request){
            // $user = new User;
            // $user->name = $request->name;
            // $user->save();

            // dd($request);
            $validated = $request->validated();
            // $validate=$request->validate([
            //     'name'=>'required',
            //     'email'=>'required|email|unique:users',
            //     'phone'=>'required|digits:10',
            //     'password'=>'required|min:4|max:10',
            //     'profile'=>'required|image',
            //     'checkbox'=>'required'

            // ]);
            return $request->all();
        }

}
