<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'total', 
        'quantity',
        'status'
    ];

    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
