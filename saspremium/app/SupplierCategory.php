<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_supplier', 'id_category',
    ];

    public function supplier() {
        return $this->belongsTo('App\Supplier', 'id_supplier', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Category', 'id_category', 'id');
    }
}
