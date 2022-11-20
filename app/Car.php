<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['make', 'model', 'year', 'owner_id'];

    /**
     * Get owners associated with a car.
     *
     * @return HasOne
     */
    public function owner(): HasOne
    {
        return $this->hasOne(Owner::class, 'id', 'owner_id');
    }

    /**
     * Get addresses associated with a car.
     *
     * @return HasOne
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function getTypes(): array
    {
        return json_decode(file_get_contents(storage_path() . '/json/car-data.json'), true);
    }
}
