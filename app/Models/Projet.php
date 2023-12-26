<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'image', 'status', 'user_id'];

    /**
     * @var relationship
     */
    public function donateurs()
    {
        return $this->hasMany(Donateur::class);
    }
    public function donmateriels()
    {
        return $this->hasMany(DonMateriel::class);
    }
    public function donfinanciers()
    {
        return $this->hasMany(DonFinanciere::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
