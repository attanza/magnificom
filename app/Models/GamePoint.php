<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GamePoint extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
