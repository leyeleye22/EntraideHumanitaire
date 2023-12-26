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

    public function donateurs(): BelongsToMany
    {
        return $this->belongsToMany(Projet::class);
    }
}
