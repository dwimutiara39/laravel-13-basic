<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
#[Fillable(['name', 'departmen_id'])]

class Lecturer extends Model
{
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;
    protected $with = ['departmen'];
    public function departmen(): BelongsTo
    {
        return $this->belongsTo(Departmen::class);
    }
}
