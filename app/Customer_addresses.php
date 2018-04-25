<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_addresses extends Model
{
 
    protected $fillable = [
        'Country','State','Street','House','Zip'
    ];
}

