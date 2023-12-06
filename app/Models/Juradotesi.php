<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Juradotesi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function proyectos(): HasOne
    {
        return $this->hasOne(Proyecto::class);
    }
}
