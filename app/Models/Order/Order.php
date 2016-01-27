<?php
/**
 * Created by PhpStorm.
 * User: zhouhaotong
 * Date: 16/1/25
 * Time: 下午5:01
 */

namespace App\Models\Order;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function product()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }
}