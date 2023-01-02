<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Party extends Model
{
    use HasFactory, Sluggable;

    public $fillable = [
        'user_id', //party creator'
        'chairman_id', // party chairman
        'name',
        'abbreviation',
        'slogan',
        'slug',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the car's logo.
     */
    public function logo()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
