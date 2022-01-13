<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function Hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Room(){
        return $this->belongsTo(Room::class);
    }
}
