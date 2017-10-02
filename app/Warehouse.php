<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Warehouse
 * @property string $location
 * @property string $manager
 * @property int $capacity
 * @property string $contact
 * @property int $status
 */
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
