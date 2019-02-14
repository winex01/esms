<?php

namespace App;

use App\Sex;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }
}
