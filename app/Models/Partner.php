<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'desc' , 'discount' , 'image' , 'city_id' 
    ];

    public function cities()
    {
        return $this->belongsTo(City::class , 'city_id');
    }
}
