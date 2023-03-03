<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cientifico',
        'nombre_comun',
        'imagen',
        'link_history',
        'link_info',
    ];

    public function avistamientos()
    {
        return $this->hasMany(Avistamiento::class);
    }
    
    
}

