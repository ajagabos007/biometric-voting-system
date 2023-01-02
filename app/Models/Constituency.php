<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    use HasFactory;
    public $fillable = [
        'lga_id',
        'name',
    ];
    
    public function wards(){
        return $this->hasMany(Ward::class);
    }
    public function lga() {
        return $this->belongsTo(Lga::class);
    }
}
