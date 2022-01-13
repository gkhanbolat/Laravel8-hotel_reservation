<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function Hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
