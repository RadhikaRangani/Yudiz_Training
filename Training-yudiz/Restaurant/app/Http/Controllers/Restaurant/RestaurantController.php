<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Restaurant\RestaurantRequest;
use App\Http\Requests\Restaurant\UpdateRestaurantRequest;
use App\Models\Restaurant;
use App\Models\Users;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
// use RealRashid\SweetAlert\Facades\Alert;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function restaurants(){
        $restaurants = Restaurant::all();
        // dd($restaurants);
        return view('wel',compact('restaurants'));
    }
    public function index()
    {
        // $user = auth()->user();
        $restaurants = Restaurant::with(['users'=>function($q){
            $q->where('user_id',Auth::id());
        }])->get();
        // dd($restaurants);
        return view('restaurants.index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RestaurantRequest $request)
    {
        // dd($request ->all());
        $user_id = Auth::id();
        // dd($user_id);

         //image upload
        if ($request->hasFile('image')) {
            $image  = $request->file('image');
            $imagePath = $image->store('Rimages');
            $validatedData['image'] = $imagePath;
        }
        //insert data
        $restaurants = Restaurant::create([
            'user_id'     => $user_id,
            'name'        => $request -> name,
            'description' => $request -> description,
            'address'     => $request -> address,
            'contact'     => $request -> number,
            'image'       => $imagePath,
        ]);
        return redirect()->route('restaurants.index')->with('success','Company has been created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        // dd('show');
        return view('restaurants.show',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Restaurant $restaurant)
    {
        return view('restaurants.edit',compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        // dd('update in');

        //image upload
        if ($request->hasFile('image')) {
            //delete previous image
            Storage::delete($restaurant->image);

            $image = $request->file('image');
            $imagePath = $image->store('Rimages');
            $restaurant->image = $imagePath;
        }

       //update data
       $restaurant->name = $request->name;
       $restaurant->description = $request->description;
       $restaurant->address = $request->address;
       $restaurant->contact = $request->number;
       $restaurant->save();
    // dd($restaurant);

        return redirect()->route('restaurants.index')->with('success', 'Restaurant has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //Image delete
        // dd($restaurant->id);
        $restaurantImages = $restaurant->where('id', $restaurant->id)->pluck('image')->first();
        // dd($restaurantImages);
        Storage::delete($restaurantImages);
        $restaurant->delete();
        return redirect()->route('restaurants.index')->with('success','Restaurant has been deleted successfully');
    }

    public function follow(Restaurant $restaurant){
        // dd('in');
        $user_id = Auth::id();
        $restaurant->users()->attach($user_id);
        return redirect()->route('restaurants.index')->with('success','You are now following restaurant');
    }
    public function unfollow(Restaurant $restaurant){
        // dd('in');
        $user_id = Auth::id();
       $restaurant->users()->detach($user_id);
        // dd($d);
        return redirect()->route('restaurants.index')->with('success','You are now unfollowing restaurant');

    }
}
