<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;


#[Fillable(['name'])]
class Departmen extends Model
{
    public function lecturers(): HasMany
    {
        return $this->hasMany(lecturer::class);
    }
}
