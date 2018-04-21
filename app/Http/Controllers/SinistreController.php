<?php

namespace App\Http\Controllers;

use App\Chauffeur;
use App\Sinistre;
use Illuminate\Http\Request;

class SinistreController extends Controller
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
        $sinistre = Sinistre::all();
        return view('sinistre.list', compact('sinistre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chauffeur = Chauffeur::pluck('nom' , 'id');
        return view('sinistre.add', compact('chauffeur'));
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
                    'code' => 'required|max:20|unique:sinistres',
                    'date' => 'required',
                    'mantdep' => 'required',
                    'mantremb' => 'required',
                ]);
            $input = $request->all();
            $sinistre = Sinistre::create($input);
            if($sinistre)
            {
                return redirect('GestionSinistre')->with('success','Sinistre created successfully!');
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
        $sinistres = Sinistre::findOrFail($id);
        $chauffeur = Chauffeur::pluck('nom' , 'id');
        return view('sinistre.edit', compact('chauffeur', 'sinistres'));
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
        $sinistre = Sinistre::findOrFail($id)->update($input);
        if($sinistre)
        {
            return redirect('GestionSinistre')->with('info','Setting Sinistre Updated successfully!');
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
        $sinistre =Sinistre::findOrFail($id)->delete();
        if($sinistre){
            return redirect()->back()->with('success','Sinistre deleted successfully!');
        }
    }
}
