<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected  $fillable =['matricule', 'type', 'date', 'cout', 'kmveh', 'for_id'];

    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur', 'for_id');
    }

    public function vehicule()
    {
        return $this->belongsTo('App\Vehicule', 'matricule');
    }
}
