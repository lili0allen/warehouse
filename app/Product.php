<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sku', 
        'name', 
        'supplier', 
        'description', 
        'status', 
        'categories', 
        'attributes', 
        'quantity', 
        'price', 
        'dateProduced', 
        'placeProduced', 
        'canExpired', 
        'dateExpired'   
    ];

    protected $guarded = ['id'];

    public function warehouse()
    {
        return $this->belongsTo('App\Warehouse');
    }
}
