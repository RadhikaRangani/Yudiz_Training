<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = auth()->user();
        // $restaurants = Restaurant::with(['users'=>function($q){
        //     $q->where('user_id',auth()->user()->id);
        // }])->get();
        // dd($restaurants);
        return view('welcome');
    }

}
