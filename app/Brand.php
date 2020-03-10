<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table = "brand";

    protected $fillable = ["brand_name"];

    public function Products()
    {
        return $this->hasMany("\App\Product");
    }
}
