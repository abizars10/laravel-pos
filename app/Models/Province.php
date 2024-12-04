<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name']; // Make sure 'name' is fillable for mass assignment
}
