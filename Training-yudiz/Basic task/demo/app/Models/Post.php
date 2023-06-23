<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";
    protected $primarykey ="id";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
