<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    public $fillable = [
        'state_id',
        'name',
    ];
    
    public function constituencies(){
        return $this->hasMany(Constituency::class);
    }

    public function state() {
        return $this->belongsTo(State::class);
    }
}
