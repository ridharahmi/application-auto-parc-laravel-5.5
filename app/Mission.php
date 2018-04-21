<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected  $fillable = ['code', 'type', 'vihicule_id', 'chaffeur_id', 'datedepart', 'dateretour', 'kmdepart', 'kmretour', 'ville', 'kmville', 'nmbonus'];

    public function chauffeur()
    {
        return $this->belongsTo('App\Chauffeur', 'chaffeur_id');
    }

    public function vehicule()
    {
        return $this->belongsTo('App\Vehicule', 'vihicule_id');
    }
}
