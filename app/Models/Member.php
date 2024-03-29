<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'segid',
        'affilate',
        'DOB',
    ];

    public function post(): HasMany
    {
        return $this->hasMany(Post::class)->withTimestamps();
    }

    public function user()
    {
        return $this->hasOne(Member::class);
    }
}
