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

    public function warehouses()
    {
        return $this->hasMany('App\Warehouse');
    }
}
