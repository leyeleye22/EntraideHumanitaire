<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Administrateur extends Model
{
    use HasFactory;

    /**
     * @var array guarded
     * @access protected
     * 
     */
    protected $fillable=[
        'nom_complet',
        'email',
        'password'
    ];

    /**
     * @var relationship 
     * 
     * @var \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beneficiares(): HasMany
    {
        return $this->hasMany(Beneficiare::class);
    }

    public function projets(): HasMany
    {
        return $this->hasMany(Projet::class);
    }

    public function donateurs(): HasMany
    {
        return $this->hasMany(Donateur::class);
    }
}
