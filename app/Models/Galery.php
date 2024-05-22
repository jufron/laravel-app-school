<?php

namespace App\Models;

use App\Traits\TimestampFormatting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory, TimestampFormatting;

    protected $table = 'galeries';

    protected $fillable = [
        'image',
        'description'
    ];
}
