<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sku', 
        'name', 
        'description', 
        'status', 
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
        return $this->belongsToMany('App\Warehouse');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function attributes()
    {
        return $this->hasMany('App\Attribute');
    }
    
    public function transactions()
    {
        return $this->belongsToMany('App\Transaction');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
