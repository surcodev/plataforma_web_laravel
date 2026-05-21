<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $agent_id
 * @property int $location_id
 * @property int $type_id
 * @property string|null $amenities
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $price
 * @property string $featured_photo
 * @property string $purpose
 * @property int|null $bedroom
 * @property int|null $bathroom
 * @property int|null $size
 * @property int|null $floor
 * @property int|null $garage
 * @property int|null $balcony
 * @property string|null $address
 * @property int|null $built_year
 * @property string|null $map
 * @property string $is_featured
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent|null $agent
 * @property-read \App\Models\Location|null $location
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PropertyPhoto> $photos
 * @property-read int|null $photos_count
 * @property-read \App\Models\Type|null $type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PropertyVideo> $videos
 * @property-read int|null $videos_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wishlist> $wishlists
 * @property-read int|null $wishlists_count
 * @property int|null $price_dolar
 */
class Property extends Model
{
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function photos()
    {
        return $this->hasMany(PropertyPhoto::class);
    }

    public function videos()
    {
        return $this->hasMany(PropertyVideo::class);
    }
    
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
