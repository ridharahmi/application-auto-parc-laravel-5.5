<?php

namespace App\Http\Controllers;

use App\Chauffeur;
use App\Vehicule;
use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
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
        $mission = Mission::all();
        return view('mission.list', compact('mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chauffeur = Chauffeur::pluck('nom' , 'id');
        $vehicule = Vehicule::pluck('matricule' , 'id');
        //dd($vehicule);
        return view('mission.add', compact('chauffeur', 'vehicule'));
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
                    'code' => 'required|max:20|unique:missions',
                    'vihicule_id' => 'required',
                    'chaffeur_id' => 'required',
                    'datedepart' => 'required',
                    'dateretour' => 'required',
                    'kmdepart' => 'required',
                    'kmretour' => 'required'
                ]);
            $input = $request->all();
            $input['kmville'] = $input['kmretour'] - $input['kmdepart'];
            $input['nmbonus'] =  (int)($input['kmville'] / 10);
            $now   = date('Y-m-d');
            if($input['datedepart'] < $now || $input['dateretour'] < $now){
                return redirect('GestionMission')->with('warning','Date est inferieur au '. $now. ' !!?' );
            }else {
                $mission = Mission::create($input);
                if ($mission) {
                    return redirect('GestionMission')->with('success', 'Mission created successfully!');
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
        $mission = Mission::findOrFail($id);
        $chauffeur = Chauffeur::pluck('nom' , 'id');
        $vehicule = Vehicule::pluck('matricule' , 'id');
        return view('mission.edit', compact('mission', 'chauffeur', 'vehicule'));
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
        $input['kmville'] = $input['kmretour'] - $input['kmdepart'];
        $input['nmbonus'] =  (int)($input['kmville'] / 10);
        $mission = Mission::findOrFail($id)->update($input);
        if($mission)
        {
            return redirect('GestionMission')->with('info','Setting Mission Updated successfully!');
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
        $mission =Mission::findOrFail($id)->delete();
        if($mission){
            return redirect()->back()->with('success','Mission deleted successfully!');
        }
    }
}
