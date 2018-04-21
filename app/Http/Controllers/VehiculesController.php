<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;

class VehiculesController extends Controller
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
        $vehicules = Vehicule::all();
        return view('vehicules.list', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicules.add');
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
                    'matricule' => 'required|max:20|unique:vehicules',
                    'affectation' => 'required',
                    'carte' => 'required',
                    'valeur' => 'required',
                    'date' => 'required',
                    'kilometrage' => 'required',
                ]);
            $input = $request->all();
            //dd($input);
            $vehicule=Vehicule::create($input);
            if($vehicule)
            {
                return redirect('GestionVehicules')->with('success','Vehicule created successfully!');

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
        $vehicules=Vehicule::findOrFail($id);
        return view('vehicules.edit', compact('vehicules'));
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
        $vehicule = Vehicule::findOrFail($id)->update($input);
        if($vehicule)
        {
            return redirect('GestionVehicules')->with('info','Setting Vehicule Updated successfully!');
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
        $vehicule=Vehicule::findOrFail($id)->delete();
        if($vehicule){
            return redirect()->back()->with('success','Vehicule deleted successfully!');
        }
    }
}
