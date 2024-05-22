<?php

namespace App\Models;

use App\Traits\TimestampFormatting;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory, TimestampFormatting;

    protected $table = 'testimonials';

    protected $fillable = [
        'image', 'name', 'message'
    ];

    protected function messageLimit (): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->attributes['message'], 50),
        );
    }
}
