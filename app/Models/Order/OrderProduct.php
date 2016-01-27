<?php
/**
 * Created by PhpStorm.
 * User: zhouhaotong
 * Date: 16/1/25
 * Time: 下午5:01
 */

namespace App\Models\Order;


use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}