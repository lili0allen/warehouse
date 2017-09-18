<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 
        'location',
        'contact',
        'status'
    ];

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
