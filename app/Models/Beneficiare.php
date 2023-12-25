<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Beneficiare extends Model
{

    use HasFactory;

    /**
     * @var array guarded
     * @access protected
     * 
     */
    protected $fillable = [
        'nom_complet',
        'email',
        'adresse',
        'telephone',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Model\BelongsToMany
     */
    public function DonProjet(): BelongsToMany
    {
        return $this->belongsToMany(Donprojet::class);
    }

    public function newsletters() : BelongsTo
    {
        return $this->belongsTo(Newsletter::class);
    }
}
