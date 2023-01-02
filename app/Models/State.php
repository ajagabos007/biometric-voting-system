<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $fillable = [
        'country_id',
        'name',
    ];
    
    public function lgas(){
        return $this->hasMany(Lga::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
