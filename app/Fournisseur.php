<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable =['code', 'nom', 'email', 'fax', 'tel', 'adresse'];


    public function maintenance()
    {
        return $this->hasMany('App\Maintenance', 'id');
    }
}
