<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    /**
     * Concat first and last name to return full name
     *
     * @return String
     */
    public function getNameAttribute(): string
    {
        return implode(' ', array_filter([$this->first_name, $this->last_name]));
    }

    /**
     * Get addresses associated with an owner.
     *
     * @return HasMany
     */
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    /**
     * Get cars associated with an owner.
     *
     * @return HasMany
     */
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
