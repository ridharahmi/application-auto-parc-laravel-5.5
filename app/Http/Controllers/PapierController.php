<?php

namespace App\Http\Controllers;

use App\Papier;
use App\Vehicule;
use Illuminate\Http\Request;

class PapierController extends Controller
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
        $papier = Papier::all();
        return view('papier.list', compact('papier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicule = Vehicule::pluck('matricule' , 'id');
        return view('papier.add', compact('vehicule'));
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
                    'code' => 'required|max:20|unique:papiers',
                    'mantant' => 'required',
                    'datepaiement' => 'required',
                    'dateechance' => 'required',
                ]);
            $input = $request->all();
            $now   = date('Y-m-d');
            if($input['dateechance'] < $now || $input['datepaiement'] < $now){
                return redirect('GestionPapier')->with('warning','Date est inferieur au '. $now. ' !!?' );
            }else{
                $papier = Papier::create($input);
                if($papier)
                {
                    return redirect('GestionPapier')->with('success','Papier created successfully!');
                }
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
        $papier = Papier::findOrFail($id);
        $vehicule = Vehicule::pluck('matricule' , 'id');
        return view('papier.edit', compact('papier', 'vehicule'));
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
        $papier = Papier::findOrFail($id)->update($input);
        if($papier)
        {
            return redirect('GestionPapier')->with('info','Setting Papier Updated successfully!');
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
        $papier =Papier::findOrFail($id)->delete();
        if($papier){
            return redirect()->back()->with('success','Papier deleted successfully!');
        }
    }
}
