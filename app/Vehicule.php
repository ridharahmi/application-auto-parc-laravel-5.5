<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected  $fillable =['matricule', 'modele', 'marque', 'affectation', 'carte', 'type', 'valeur', 'etat', 'date', 'kilometrage'];


    public function papier()
    {
        return $this->hasMany('App\Papier');
    }

    public function missions()
    {
        return $this->hasMany('App\Mission','vihicule_id');
    }

}
