<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papier extends Model
{
    protected  $fillable =['code', 'mantant', 'categorie', 'matricule', 'datepaiement', 'dateechance'];

    public function vehicule()
    {
        return $this->belongsTo('App\Vehicule', 'matricule');
    }
}
