<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Hero extends Model
// {
//     use HasFactory;

//     protected $table = 'heros';
//     protected $primaryKey = 'id';
//     protected $fillable = ['hero_role_id', 'name', 'specially', 'lane', 'type', 'image'];
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'heros';
    protected $primaryKey = 'id';
    protected $fillable = ['hero_role_id', 'name', 'specially', 'lane', 'type', 'image'];

    public function votes()
    {
        return $this->hasMany(Vote::class, 'hero_id');
    }

    public function role()
    {
        return $this->belongsTo(HeroRole::class, 'hero_role_id');
    }
}
