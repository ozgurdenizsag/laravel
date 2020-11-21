<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateOrder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'processed', 'shipped', 'delivered', 'id_num_order'
    ];

    public function order(){
        return $this->hasOne('App\Order', 'num_order');
    }
}
