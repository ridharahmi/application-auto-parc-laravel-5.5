<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Maintenance;
use App\Vehicule;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintenance = Maintenance::all();
        return view('maintenance.list', compact('maintenance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicule = Vehicule::pluck('matricule' , 'id');
        $fournisseur = Fournisseur::pluck('nom' , 'id');
        return view('maintenance.add', compact('fournisseur', 'vehicule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')) {
            $this->validate($request,
                [
                    'matricule' => 'required|max:20|unique:maintenances',
                    'for_id' => 'required',
                    'date' => 'required',
                    'cout' => 'required',
                    'kmveh' => 'required',
                ]);
            $input = $request->all();
            $maintenance = Maintenance::create($input);
            if($maintenance)
            {
                return redirect('GestionMaintenance')->with('success','Maintenance created successfully!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $vehicule = Vehicule::pluck('matricule' , 'id');
        $fournisseur = Fournisseur::pluck('nom' , 'id');
        return view('maintenance.edit', compact('fournisseur', 'maintenance', 'vehicule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $maintenance = Maintenance::findOrFail($id)->update($input);
        if($maintenance)
        {
            return redirect('GestionMaintenance')->with('info','Setting Maintenance Updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maintenance = Maintenance::findOrFail($id)->delete();
        if($maintenance){
            return redirect()->back()->with('success','Maintenance deleted successfully!');
        }
    }
}
