<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroRole extends Model
{
    use HasFactory;

    protected $table = 'hero_roles';
    protected $primaryKey = 'id';
    protected $fillable = ['role'];
}
