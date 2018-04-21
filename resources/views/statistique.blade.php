@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title"><i class="fa fa-pie-chart fa-fin  fa-2x"></i> Statistique</div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Modele</th>
                            <th>Comsomation</th>
                            <th>Kilometrage/ville</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehicules as $vehicule)
                            <tr>
                                <td>{{ $vehicule->matricule}}</td>
                                <td>{{ $vehicule->modele}}</td>
                                <td>{{ $vehicule->missions()->sum('nmbonus')}}</td>
                                <td>{{ $vehicule->missions()->sum('kmville')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection