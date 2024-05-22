<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class PlatformCast implements CastsAttributes
{
    protected $allowedPlatforms = [
        'Facebook', 'Instagram', 'YouTube', 'Tik Tok', 'Email', 'whatsapp'
    ];

    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (!in_array($value, $this->allowedPlatforms)) {
            throw new InvalidArgumentException("The platform must be one of: " . implode(', ', $this->allowedPlatforms));
        }

        return $value;
    }
}
