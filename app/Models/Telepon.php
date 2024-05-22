<?php

namespace App\Models;

use App\Traits\TimestampFormatting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory, TimestampFormatting;

    protected $table = 'telepon';

    protected $fillable = [
        'no_telepon'
    ];


}
