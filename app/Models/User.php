<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile',
        'about',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // following - followers relation
    public function followings()
    {
        return $this->belongsToMany(User::class, 'follower_user', 'follower_id', 'user_id');
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'follower_user', 'user_id', 'follower_id');
    }
// check if following or not
    public function follows(User $user)
    {
        return $this->followings()->where('user_id', $user->id)->exists();
    }

// like dislike rels
    public function likes()
    {
        return $this->belongsToMany(Idea::class, 'idea_like');
    }

    public function getProfileUrl()
    {
        if (str_contains($this->profile , "profile/")) {
            return url('storage/'.$this->profile);
        }

        return $this->profile;
    }
}
