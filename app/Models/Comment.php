<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongTo;
use Illuminate\Database\Eloquent\Relations\belongToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;

use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $table = "Comments";

    protected $fillable = ["post_id", "author_id", "comment", "upvote", "downvote",];
    protected $hidden = [];
    protected $casts = [];

    public function post(){
        return $this->belongTo(Post::class);
    }

    public function author(){
        return $this->belongTo(User::class);
    }
}
