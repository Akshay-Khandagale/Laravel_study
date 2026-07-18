<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'file',
    ];
}
