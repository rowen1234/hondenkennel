<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    public function Owners()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    public function kennel()
    {
        return $this->belongsTo(user::class, 'kennel');
    }
}
