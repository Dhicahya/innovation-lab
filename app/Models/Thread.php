<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Thread extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(user::class);
    }

    public function comments() : HasMany {
        return $this->hasMany(Comment::class);
    }

    // public function likes() : HasMany {
    //     return $this->hasMany(Like::class);
    // }

    public function hasLike()
    {
        return $this->hasOne(Like::class)->where('likes.user_id', Auth::user()->id);
    }

   
    public function totalLike()
    {
        return $this->hasMany(Like::class)->count();
    }

    public function totalComment()
    {
        return $this->hasMany(Comment::class)->count();
    }



    
}
