<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description',
        'img',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->withTimestamps();
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
