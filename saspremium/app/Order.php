<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'num_order', 'id_product', 'id_user', 'id_delivery_addresses',
    ];

    public function products() {
        return $this->hasMany('App\Product', 'id_product');
    }

    public function delivery_address() {
        return $this->hasOne('App\DeliveryAddress', 'id_delivery_address');
    }

    public function user() {
        return $this->hasOne('App\User', 'id_user');
    }
}
