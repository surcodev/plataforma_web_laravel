<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $property_id
 * @property string $video
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Property $property
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PropertyVideo whereVideo($value)
 * @mixin \Eloquent
 */
class PropertyVideo extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
