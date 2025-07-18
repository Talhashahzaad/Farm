<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    //

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function package(): BelongsTo
    {
        return $this->belongsTo(Package::class)->withTrashed();
    }
}