@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="GestionVehicules/create"><i class="fa fa-plus"></i> Add New Vehicules</a>
                </div>
                @include('message')
                <div class="panel panel-default filterable">
                    <div class="panel-heading">
                        <div class="panel-title"><i class="fa fa-car"></i> Listes Vehicules</div>
                        <div class="pull-right">
                            <button class="btn btn-primary btn-filter"><span
                                        class="fa fa-search"></span> Search
                            </button>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Matricule" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Modele" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Marque" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Etat" disabled></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehicules as $vehicule)
                            <tr>
                                <td>{{$vehicule->matricule}}</td>
                                <td>{{$vehicule->modele}}</td>
                                <td>{{$vehicule->marque}}</td>
                                <td>{{$vehicule->etat}}</td>
                                <td>
                                    <button class="btn btn-info btn-xs" data-title="open" data-toggle="modal"
                                            data-target="#open{{ $vehicule->id }}">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </td>
                                <td>
                                    <a href="GestionVehicules/{{ $vehicule->id }}/edit" class="btn btn-success btn-xs"
                                       title="Edit"> <span class="fa fa-edit"></span></a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete{{ $vehicule->id }}">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="open{{ $vehicule->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="fa fa-remove" aria-hidden="true"></span>
                                            </button>
                                            <h4 class="modal-title custom_align" id="Heading">
                                                <i class="fa fa-car"></i> Vehicule __ #ID : {{$vehicule->id}}
                                        </div>
                                        <div class="modal-body">
                                            <ul class="open-info">
                                                <li>Matricule :{{$vehicule->matricule}}</li>
                                                <li>modéle : {{$vehicule->modele}}</li>
                                                <li>Marque : {{$vehicule->marque}}</li>
                                                <li>Affectation: {{$vehicule->affectation}}</li>
                                                <li>Carte Grise: {{$vehicule->carte}}</li>
                                                <li>Type carburant: {{$vehicule->type}}</li>
                                                <li>Valeur d'achat (DT): {{$vehicule->valeur}}</li>
                                                <li>Etat Actuelle: {{$vehicule->etat}}</li>
                                                <li>Date d'acquisation: {{$vehicule->date}}</li>
                                                <li>kilométrage: {{$vehicule->kilometrage}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="delete{{ $vehicule->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="fa fa-remove" aria-hidden="true"></span>
                                            </button>
                                            <h4 class="modal-title custom_align" id="Heading">Delete this
                                                entry {{ $vehicule->id }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                <span class="fa fa-warning-sign"></span> Are you sure you want to delete
                                                this vehicule ?
                                            </div>
                                        </div>
                                        <div class="modal-footer ">
                                            {!! Form::open(['method'=>'DELETE', 'route'=>['GestionVehicules.destroy',$vehicule->id]]) !!}
                                            <button class="btn btn-success" type="submit">
                                                <span class="fa fa-sign-in"></span> Yes
                                            </button>
                                            {!! Form::close() !!}
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                <span class="fa fa-remove"></span> No
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
