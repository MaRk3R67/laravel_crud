<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class People extends Model
{
    protected $fillable = ['name', 'surname', 'phone_number', 'street', 'city', 'country'];



    use HasFactory;
}
