<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable =[

        'date',
        'branch_id',
        'company_name',
        'invoice',
        'product_id',
        'discount',
        'discount_ammount',
        'total_ammount'




    ];
}
