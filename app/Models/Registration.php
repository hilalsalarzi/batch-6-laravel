<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //

    // table name change
    protected $table = 'mystudents';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        // 'city',
    ];
}
