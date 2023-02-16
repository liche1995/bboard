<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongTo;
use Illuminate\Database\Eloquent\Relations\belongToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;

use App\Models\Board;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $table = "Posts";

    protected $fillable = ["board_id", "author_id", "title", "content", "commentable"];
    protected $hidden = [];
    protected $casts = [];

    public function board(){
        return $this->belongTo(Board:class);
    }

    public function author(){
        return $this->belongTo(User::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment:class);
    }
}
