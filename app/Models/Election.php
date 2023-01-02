<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Election extends Model
{
    use HasFactory;

    
    public $fillable = [
        'election_type_id',
        'start_time' ,
        'close_time',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'start_time' => 'datetime:Y-m-d',
        'close_time' => 'datetime:Y-m-d',
    ];

    protected function code(): Attribute{
        return new Attribute(
            get :fn () => $this->type->name."\\".$this->start_time."\\".$this->id,
        );
    
    }
    public function type(){
        return $this->belongsTo(ElectionType::class,'election_type_id');
    }
    public function posts()
    {
       return $this->belongsToMany(Post::class);
    }
}
