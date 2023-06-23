<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    // protected $table = "restaurants";
    protected $primarykey ="id";

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'address',
        'contact',
        'image',
    ];

    //Relationships
    public function users()
    {
        return $this->belongsToMany(User::class,'restaurant_user','restaurant_id','user_id');
    }
}

