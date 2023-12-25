<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Donateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet',
        'email',
        'telephone'
    ];

    /**
     * @var relationship
     */

    public function administrateurs(): BelongsTo
    {
        return $this->belongsTo(Administrateur::class);
    }

    public function projets(): BelongsToMany
    {
        return $this->belongsToMany(Projet::class);
    }

    public function newsletters() : BelongsTo
    {
        return $this->belongsTo(Newsletter::class);
    }
}
