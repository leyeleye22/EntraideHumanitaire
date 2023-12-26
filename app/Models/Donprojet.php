<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Donprojet extends Model
{
    use HasFactory;

    /**
     * @var relationship
     */
    protected $guarded=[];

    public function donateur()
    {
        return $this->belongsTo(Donateur::class);
    }
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
    public function donmateriel()
    {
        return $this->belongsTo(DonMateriel::class);
    }

}
