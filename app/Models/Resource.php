<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resource extends Model
{
    use HasFactory;

    public function contents(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOfTitle(Builder $query, string $title): void
    {
        $query->where('title', 'like', '%' . $title . '%');
    }

    public function scopeOfCategory(Builder $query, string $category): void
    {
        $query->where('category', $category);
    }
}
