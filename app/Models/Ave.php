<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    public function areas(){
        return $this->belongsToMany(Area::class);
    }
    use HasFactory;
}

