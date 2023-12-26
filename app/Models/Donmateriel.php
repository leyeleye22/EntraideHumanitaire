<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonMateriel extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresse',
        'telephone',
        'projet_id',
        'donateur_id',

    ];
       /**
     * @var relationship
     */

     public function donateur()
     {
         return $this->belongsTo(Donateur::class);
     }
     public function projet()
     {
         return $this->belongsTo(Projet::class);
     }

}
