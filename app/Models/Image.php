<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    /**
     * Get the parent imageable model (hotel or flight).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
