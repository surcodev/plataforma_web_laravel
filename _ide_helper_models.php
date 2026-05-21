<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $photo
 * @property string $password
 * @property string $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
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
	class Agent extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Amenity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Amenity extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faq whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $photo
 * @property int $total_properties
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereTotalProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $agent_id
 * @property string $subject
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent $agent
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereUserId($value)
 * @mixin \Eloquent
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $message_id
 * @property int $user_id
 * @property int $agent_id
 * @property string $sender
 * @property string $reply
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent $agent
 * @property-read \App\Models\Message $message
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereUserId($value)
 * @mixin \Eloquent
 */
	class MessageReply extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $agent_id
 * @property int $package_id
 * @property string $invoice_no
 * @property string|null $transaction_id
 * @property string $payment_method
 * @property string $paid_amount
 * @property string|null $purchase_date
 * @property string|null $expire_date
 * @property string $status
 * @property int $currently_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent|null $agent
 * @property-read \App\Models\Package|null $package
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereCurrentlyActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
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
	class Package extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $terms_content
 * @property string|null $privacy_content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page wherePrivacyContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereTermsContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $short_description
 * @property string $description
 * @property string $photo
 * @property int $total_views
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereTotalViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
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
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereAmenities($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereBalcony($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereBathroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereBedroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereBuiltYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereFeaturedPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereGarage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property wherePriceDolar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Property whereUpdatedAt($value)
 */
	class Property extends \Eloquent {}
}

namespace App\Models{
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
	class PropertyPhoto extends \Eloquent {}
}

namespace App\Models{
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
	class PropertyVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $logo
 * @property string $favicon
 * @property string $banner
 * @property string|null $footer_address
 * @property string|null $footer_email
 * @property string|null $footer_phone
 * @property string|null $footer_facebook
 * @property string|null $footer_twitter
 * @property string|null $footer_linkedin
 * @property string|null $footer_instagram
 * @property string $footer_copyright
 * @property string|null $contact_map_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereContactMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereFooterTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $email
 * @property string|null $token
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $designation
 * @property string $photo
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Type extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $photo
 * @property string $password
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wishlist> $wishlists
 * @property-read int|null $wishlists_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $property_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Property $property
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereUserId($value)
 * @mixin \Eloquent
 */
	class Wishlist extends \Eloquent {}
}

