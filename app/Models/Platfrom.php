<?php

namespace App\Models;

use App\Traits\TimestampFormatting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Platfrom extends Model
{
    use HasFactory, TimestampFormatting;

    protected $table = 'platfrom';

    protected $fillable = [
        'platfrom_name', 'icon'
    ];

    public function socialMedia (): HasMany
    {
        return $this->hasMany(SocialMedia::class, 'platfrom_id', 'id');
    }
}
