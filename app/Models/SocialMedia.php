<?php

namespace App\Models;

use App\Traits\TimestampFormatting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMedia extends Model
{
    use HasFactory, TimestampFormatting;

    protected $table = 'social_media';

    protected $fillable = [
        'platfrom_id', 'url'
    ];

    protected function urlLimit (): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->attributes['url'], 50),
        );
    }

    public function platfrom (): BelongsTo
    {
        return $this->belongsTo(Platfrom::class, 'platfrom_id', 'id');
    }
}
