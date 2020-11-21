<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc', 'tel'
    ];

    public function deliveryAddresses() {
        return $this->belongsToMany('App\DeliveryAddresses', 'id_supplier');
    }

    public function supplierCategories() {
        return $this->hasMany('App\SupplierCategory', 'id_supplier', 'id');
    }

    public function products(){
        return $this->belongsToMany('App\Product', 'id_supplier', 'id');
    }
}
