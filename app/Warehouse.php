<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'location', 'manager', 'capacity', 'contact', 'status'   
    ];

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
