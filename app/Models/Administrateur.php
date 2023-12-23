<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Administrateur extends Model
{
    use HasFactory;

    public function beneficiares() : BelongsTo
    {
        return $this->belongsTo()
    }
}
