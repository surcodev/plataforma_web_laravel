<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
