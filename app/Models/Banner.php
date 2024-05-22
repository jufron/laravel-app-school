<?php

namespace App\Models;

use App\Traits\TimestampFormatting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory, TimestampFormatting;

    protected $table = 'banners';

    protected $fillable = [
        'image'
    ];

}
