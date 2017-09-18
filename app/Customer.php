<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 
        'contact', 
        'status'
    ];
    
    protected $guarded = ['id'];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
