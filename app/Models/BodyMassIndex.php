<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyMassIndex extends Model
{
    protected $fillable = [
        'user_id',
        'weight',
        'height',
        'value',
        'description'
    ];
}
