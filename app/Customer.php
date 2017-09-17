<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = array('name', 'contact', 'status');

    protected $guarded = array('id');
}
