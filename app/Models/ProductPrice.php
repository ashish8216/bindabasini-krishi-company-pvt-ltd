<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['product_id', 'business_role', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
