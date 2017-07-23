<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'theories';

    protected $fillable = [
        'title', 'theory', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
