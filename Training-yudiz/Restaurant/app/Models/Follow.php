<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $table = "restaurant_user";

    //Relationship
    public function follow()
    {
        return $this->hasOne(User::class);
    }
}
