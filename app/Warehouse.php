<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = array('location', 'manager', 'capacity', 'contact', 'status');

    protected $guarded = array('id');
}
