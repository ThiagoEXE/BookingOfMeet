<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = ['date', 'theme', 'description', 'hour', 'notes'];

    public function room()
    {
    }

    public function user()
    {
    }
    public function owner()
    {
    }
}
