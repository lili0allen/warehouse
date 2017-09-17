<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = array('name', 'location', 'contact', 'status');

    protected $guarded = array('id');
}
