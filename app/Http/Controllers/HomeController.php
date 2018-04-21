<?php

namespace App\Http\Controllers;

use App\Vehicule;
use App\Chauffeur;
use App\Fournisseur;
use App\Maintenance;
use App\Mission;
use App\Sinistre;
use App\Papier;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vda = Vehicule::where('etat', 'Disponible')->count();
        $vm = Vehicule::where('etat', 'En marche')->count();
        $vp = Vehicule::where('etat', 'En panne')->count();
        $vr = Vehicule::where('etat', 'En réparation')->count();
        $cd = Chauffeur::where('etat', 'Disponible')->count();
        $cnd = Chauffeur::where('etat', 'Non Disponible')->count();
        $for = Fournisseur::count();
        $main = Maintenance::count();
        $miss = Mission::count();
        $sins = Sinistre::count();
        $pap = Papier::count();
        return view('home', compact('vda', 'vm', 'vp', 'vr', 'cd', 'cnd', 'for', 'main', 'miss', 'sins', 'pap'));
    }

    public function statistique()
    {
        $vehicules = Vehicule::has('missions')->get();
        return view('statistique', compact('vehicules'));
    }

    public function alert()
    {
        $papier = Papier::all();
        $nowtime = date('Y-m-d');
        $jour = Papier::count();
        return view('alert', compact('papier', 'nowtime', 'jour'));
    }
}
