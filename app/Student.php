<?php

namespace App;

use App\Sex;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $attributes = [
        'sex_id' => 1,
    ];

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }
}
