<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acceptance',
        'description',
        'id_user',
        'id_booking'
    ];

    public function users(){ //VER COM CANDIDO O CASO DO USERS
        return $this->belongsTo(User::class);
    }

    public function booking(){
        return $this->belongsTo(Booking::class);
    }
}
