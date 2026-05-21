<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $property_id
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Property $property
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropertyPhoto extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
