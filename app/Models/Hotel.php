<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

    public function room(){
        return $this->hasMany(Room::class);
    }
}
