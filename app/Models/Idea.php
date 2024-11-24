<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'likes',
        'user_id',
        'comment_id',
    ];

// eager loading
    // protected $with = [
    //     'user'
    //     , 'comments.user'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function likes()
    {
        return $this->belongsToMany(User::class, 'idea_like');
    }
// check like
    public function liked(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    // scope
    public function scopeSearch(Builder $query, $search = '')
    {
        $query->where('content', 'LIKE', '%'. $search .'%')->get();
    }
}
