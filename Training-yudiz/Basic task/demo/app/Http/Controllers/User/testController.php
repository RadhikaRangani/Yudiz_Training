<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class testController extends Controller
{
    public function index(){
    //    return Post::find(1)->getUser;
        // return Post::with('getUser')->get();

    }
    public function user()
    {
        // return Post::find(3)->getUser;
        // dd( User::with('post')->get());
        // dd( User::has('post')->get());

        //shows user with having post and hashtag with #up
        $user = User::wherehas('post',function ($query)
        {
            $query->where('hashtag','like','%#up%');
        })->get();
        // $user_data = User::all();
        // return view('Users.view',compact('user_data'));
        dd($user);

        //shows the number of post count done by the user
        // $posts = User::withCount('post')->get();
        // $posts = User::withCount(['post'=>function($query){
        //     $query->where('caption','like','%it%' );
        // }])->get();


        // $posts = User::withWhereHas('post',function($query){
        //     $query->where('caption','like','%it%' );
        // })->get();
        // dd($posts);
        // foreach ($posts as $post) {
        //     echo ( $post->post_count);
        // }


        // $user = User::withCount('hashtag',function ($query){
        //     $query->where('hashtag' > 0 'yes' :'no post yet');
        // })->first();

        // $user = User::withCount('hashtag',function($query)
        // {
        //     $query->where('hashtag','like','%#sunday%');
        // })->get();
        // echo $user[0]->hashtag_count;


        //shows users who has not posted
        // $user = User::whereDoesntHave('post')->get();
        // dd($user);


    }
    public function manyuser(){
        // return Post::with('manyUser')->get();
    }
}
