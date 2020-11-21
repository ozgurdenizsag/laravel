<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc'
    ];

    public function supplierCategories() {
        return $this->hasMany('App\SupplierCategory', 'id_category', 'id');
    }

    public function products(){
        return $this->belongsTo('App\Product', 'id_category');
    }

}
