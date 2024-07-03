<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $filalble = ["name"];


    public function rent()
    {
        return $this->hasMany(Rent::class);
    }
}
