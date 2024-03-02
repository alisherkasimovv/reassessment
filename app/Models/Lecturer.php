<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lecturer extends Model
{
    use HasFactory;

    public function subject(): HasOne
    {
        return $this->hasOne(Subject::class);
    }

    public function assessment(): HasMany
    {
        return $this->hasMany(Assessment::class);
    }
}
