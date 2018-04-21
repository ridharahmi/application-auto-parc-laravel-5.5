<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
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
        $fournisseur = Fournisseur::all();
        return view('fournisseur.list', compact('fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseur.add');
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
                    'code' => 'required|max:20|unique:fournisseurs',
                    'nom' => 'required',
                    'email' => 'required|unique:fournisseurs',
                    'fax' => 'required',
                    'tel' => 'required',
                    'adresse' => 'required',
                ]);
            $input = $request->all();
            $fournisseur = Fournisseur::create($input);
            if($fournisseur)
            {
                return redirect('GestionFournisseur')->with('success','Fournisseur created successfully!');

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
        $fournisseur = Fournisseur::findOrFail($id);
        return view('fournisseur.edit', compact('fournisseur'));
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
        $fournisseur = Fournisseur::findOrFail($id)->update($input);
        if($fournisseur)
        {
            return redirect('GestionFournisseur')->with('info','Setting Fournisseur Updated successfully!');
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
        $fournisseur = Fournisseur::findOrFail($id)->delete();
        if($fournisseur){
            return redirect()->back()->with('success','Fournisseur deleted successfully!');
        }
    }
}
