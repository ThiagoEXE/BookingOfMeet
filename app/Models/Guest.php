<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model{

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function booking(){
        return $this->belongsTo(Booking::class);
    }



    //protected $table = 'Convidados'   @@Indica que meu model teria relação com a tabela convidados no banco
}
