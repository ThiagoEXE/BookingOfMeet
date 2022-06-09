<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'theme',
        'description',
        'hour',
        'notes',
    ];

    public function room(){
        return $this->hasOne(Room::class);
    }

    public function owner(){
        return $this->hasOne(User::class);
    }

    public function participants(){
        return $this->belongsToMany(User::class);
    }

}
