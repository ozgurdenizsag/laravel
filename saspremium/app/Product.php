<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc', 'price', 'quantity', 'delivery_date', 'id_supplier', 'id_category'
    ];

    public function orders(){
        return $this->belongsToMany('App\Order', 'id_product');
    }

    public function stateOrder(){
        return $this->belongsTo('App\StateOrder', 'num_order');
    }

    public function supplier() {
        return $this->hasOne('App\Supplier', 'id_supplier', 'id');
    }

    public function category() {
        return $this->hasOne('App\Category', 'id');
    }
}
