<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    
    public $fillable = [
        'constituency_id',
        'name',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
    
    public function constituency() {
        return $this->belongsTo(Constituency::class);
    }
    
}
