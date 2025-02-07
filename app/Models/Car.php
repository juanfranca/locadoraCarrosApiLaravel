<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id','plate', 'model_car', 'year', 'kms', 'status'
    ];


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function rent(){
        return $this->hasMany(Rent::class);
    }
}
