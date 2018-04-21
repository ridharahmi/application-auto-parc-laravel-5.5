@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="panel-title"><i class="fa fa-file-pdf-o"></i> Listes Papiers</div>
                        <span class="countjour"> {{ $jour }}</span>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Categorie</th>
                            <th>Date Echéance</th>
                            <th>Mantant</th>
                            <th>Jours Restant</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($papier as $papiers)
                            <tr>
                                <td>{{$papiers->vehicule->matricule}}</td>
                                <td>{{$papiers->categorie}}</td>
                                <td>{{$papiers->dateechance}}</td>
                                <td>{{$papiers->mantant}}</td>
                                <td>
                                    <span class="dateechance">
                                    {{ ((strtotime($papiers->dateechance) - strtotime($nowtime)))/86400 }}
                                   </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
