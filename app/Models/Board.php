<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongTo;
use Illuminate\Database\Eloquent\Relations\belongToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;

use App\Models\User;

/*
use App\Models\;
*/

class Board extends Model
{
    use HasFactory;
    protected $table = "Boards";

    protected $fillable = ["name", "comment", "moderators", "vicmod"];
    protected $hidden = [];
    protected $casts = [];

    public function moderators(){
        return $this->belongTo(User::class);
    }

    public function vicmod(){
        return $this->belongTo(User::class);
    }
}
