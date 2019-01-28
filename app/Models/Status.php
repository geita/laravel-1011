<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public fucntion user()
    {
        return $this->belongsTo(User::class);
    }
}
