<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuffierIndex extends Model
{
    protected $fillable = [
        'user_id',
        'pulse_1',
        'pulse_2',
        'pulse_3',
        'value',
        'description',
    ];
}
