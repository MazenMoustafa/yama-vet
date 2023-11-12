<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name_ar' , 'description_ar',
        'name_en' , 'description_en',
        'type' , 'product_id',
        'seller_id' ,'region_id'
      
    ];

    protected $hidden = ['created_at' , 'updated_at'];

    public function seller()
    {
        return $this->belongsTo(Seller::class,);
    }

    public function product()
    {
        return $this->belongsTo(Product::class,);
    }

    public function region()
    {
        return $this->belongsTo(City::class,);
    }
}
