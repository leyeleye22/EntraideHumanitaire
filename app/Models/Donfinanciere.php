<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonFinanciere extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'methode_paiement',
        'projet_id',
        'donateur_id',

    ];

      /**
     * @var relationship
     */

    public function donateurs(): BelongsToMany
    {
        return $this->belongsToMany(Projet::class);
    }
}
