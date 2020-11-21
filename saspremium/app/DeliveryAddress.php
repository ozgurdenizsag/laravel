<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'postcode', 'city', 'country', 'id_user', 'id_supplier'
    ];

    public function orders(){
        return $this->belongsToMany('App\Order', 'id_delivery_address');
    }

    public function user() {
        return $this->hasOne('App\User', 'id_user');
    }

    public function supplier() {
        return $this->hasOne('App\Supplier', 'id_supplier');
    }

}
