<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
