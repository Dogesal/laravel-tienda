<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class usuario extends Model
{
    use HasFactory;

    protected $table='usuarios';

    protected function nombre():Attribute
    {

        return Attribute::make(
            
            get: fn (string $value) => ucwords($value),
            set: fn (string $value) => strtolower($value),
        );

    }
}
