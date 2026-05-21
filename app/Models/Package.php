<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int|null $price
 * @property int|null $allowed_days
 * @property int|null $allowed_properties
 * @property int|null $allowed_featured_properties
 * @property int|null $allowed_photos
 * @property int|null $allowed_videos
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereAllowedDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereAllowedFeaturedProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereAllowedPhotos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereAllowedProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereAllowedVideos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Package extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
