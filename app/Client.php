<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'company', 'phone', 'email', 'description', 'status'
    ];
}
