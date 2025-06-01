<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kennel extends Model
{
    use HasFactory;

    public function Dogs()
    {
        return $this->hasMany(dog::class, 'dog_id');
    }
}
