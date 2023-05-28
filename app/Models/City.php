<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city'
    ];

    public function partners()
    {
        return $this->hasMany(Partner::class ,'city_id');
    }
}
