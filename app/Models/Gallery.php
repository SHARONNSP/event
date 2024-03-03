<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'caption'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function galleries(): BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }

    public function comments(): HasMany
    {
        return $this->HasMany(Comment::class);
    }

    public function likes(): HasMany
    {
        return $this->HasMany(Like::class);
    }

    public function attendings(): HasMany
    {
        return $this->HasMany(Attending::class);
    }
}
