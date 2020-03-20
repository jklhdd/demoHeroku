<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    protected $fillable = [
        "user_id",
        'customer_name',
        'shipping_address',
        'phone',
        "grand_total",
        "status",
        'payment_method'
    ];

    const STATUS_PENDING = 0;
    const STATUS_PROCESS = 1;
    const STATUS_SHIPPING = 2;
    const STATUS_COMPLETE = 3;
    const STATUS_CANCEL = 4;

    public function Order()
    {
        return $this->hasMany("\App\OrderProduct");
    }
}
