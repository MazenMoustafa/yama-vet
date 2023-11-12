<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'whatsapp_number',
        'description'
    ];

    protected $hidden = ['updated_at'];
}
