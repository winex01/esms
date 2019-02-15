<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
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
