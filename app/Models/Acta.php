<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Acta extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function practicas(): BelongsTo
    {
        return $this->belongsTo(Practica::class);
    }
}
