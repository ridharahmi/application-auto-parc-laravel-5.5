<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinistre extends Model
{
    protected  $fillable= ['code', 'date', 'mantdep', 'mantremb', 'chaffeur_id'];

    public function chauffeur()
    {
        return $this->belongsTo('App\Chauffeur', 'chaffeur_id');
    }
}
