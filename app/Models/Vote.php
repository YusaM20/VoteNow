<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Vote extends Model
// {
//     use HasFactory;

//     protected $fillable = ['hero_id', 'points'];

//     public function hero()
//     {
//         return $this->belongsTo(Hero::class);
//     }
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function hero()
    {
        return $this->belongsTo(Hero::class, 'hero_id');
    }
}
