<?php

namespace App\Models;

use App\Models\Backend\Branch;
use App\Models\Backend\Product;
use App\Models\Backend\Purchase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable =[

        "branch_id",
        "product_id",
        "quantity"
    ];

    public function branch_info()
        {
            return $this->belongsTo(Branch::class,"branch_id");
        }

        public function product_info()
        {
            return $this->belongsTo(Product::class,"product_id");
        }

}
