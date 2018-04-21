<?php

namespace App\Http\Controllers;

use App\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
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
        $chauffeurs = Chauffeur::all();
        return view('chauffeur.list', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chauffeur.add');
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
                    'matricule' => 'required|max:20|unique:chauffeurs',
                    'nom' => 'required',
                    'cin' => 'required',
                    'tel' => 'required',
                    'adresse' => 'required',
                    'etat' => 'required',
                ]);
            $input = $request->all();
            $chauffeur = Chauffeur::create($input);
            if($chauffeur)
            {
                return redirect('GestionChauffeur')->with('success','Chauffeur created successfully!');
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
        $chauf = Chauffeur::findOrFail($id);
        $etat = $chauf['etat'];
        if($etat === 'Disponible' ){
            $input['etat'] = 'Non Disponible';
        }else {
            $input['etat'] = 'Disponible';
        }
        $chauffeur = Chauffeur::findOrFail($id)->update($input);
        if($chauffeur){
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        return view('chauffeur.edit', compact('chauffeur'));
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
        $chauffeur = Chauffeur::findOrFail($id)->update($input);
        if($chauffeur)
        {
            return redirect('GestionChauffeur')->with('info','Setting Chauffeur Updated successfully!');
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
        $chauffeur =Chauffeur::findOrFail($id)->delete();
        if($chauffeur){
            return redirect()->back()->with('success','Chauffeur deleted successfully!');
        }
    }
}
