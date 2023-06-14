<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presc extends Model
{
    use HasFactory;

    protected $fillable = [
        'medication',
        'dosage',
        'frequency',
        'duration',
    ];
}
