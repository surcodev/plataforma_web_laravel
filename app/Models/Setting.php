<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
class Setting extends Model
{
    use HasFactory;

    // Si tu tabla se llama 'settings', no hace falta especificarla.
    // protected $table = 'settings';

    // Columnas que se pueden asignar masivamente
    protected $fillable = [
        'footer_address',
        'footer_email',
        'footer_phone',
        'footer_facebook',
        'footer_twitter',
        'footer_instagram',
        'footer_linkedin',
        'footer_copyright',
        'contact_map_url',
    ];
}
