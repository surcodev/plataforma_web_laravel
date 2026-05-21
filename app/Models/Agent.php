<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $photo
 * @property string $password
 * @property string|null $company
 * @property string|null $designation
 * @property string|null $biography
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $country
 * @property string|null $state
 * @property string|null $city
 * @property string|null $zip
 * @property string|null $website
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $instagram
 * @property string|null $token
 * @property string $status 0=pending, 1=active, 2=suspended
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MessageReply> $messageReplies
 * @property-read int|null $message_replies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agent whereZip($value)
 * @mixin \Eloquent
 */
class Agent extends Authenticatable
{
    use HasFactory, Notifiable;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
    public function messageReplies()
    {
        return $this->hasMany(MessageReply::class);
    }
}