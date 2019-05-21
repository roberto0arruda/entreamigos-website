<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Post extends Model
{
    Public function user()
    {
        return $this->belongsTo(User::class);
    }
}
