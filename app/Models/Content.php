<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Content extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $casts = [
        'itemization' => 'array',
    ];

    public function units(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }
}
