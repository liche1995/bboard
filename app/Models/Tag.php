<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongTo;
use Illuminate\Database\Eloquent\Relations\belongToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;

use App\Models\Board;

class Tag extends Model
{
    use HasFactory;
    protected $table = "Tag";

    protected $fillable = ["name",];
    protected $hidden = [];
    protected $casts = [];

    public function boards(){
        return $this->hasMany(Board::class);
    }
}
