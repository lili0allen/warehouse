<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = array('name', 'value');

    protected $guarded = array('id');
}
