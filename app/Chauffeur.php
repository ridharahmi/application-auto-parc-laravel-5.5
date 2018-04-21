<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $fillable =['matricule', 'nom', 'cin', 'tel', 'adresse', 'etat'];

    public function sinistre()
    {
        return $this->hasMany('App\Sinistre', 'id');
    }

    public function mission()
    {
        return $this->hasMany('App\Mission', 'id');
    }


}
