@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="GestionMission/create"><i class="fa fa-plus"></i> Add New Mission</a>
                </div>
                @include('message')
                <div class="panel panel-default filterable">
                    <div class="panel-heading">
                        <div class="panel-title"><i class="fa fa-tags"></i> Listes Mission</div>
                        <div class="pull-right">
                            <button class="btn btn-primary btn-filter"><span
                                        class="fa fa-search"></span> Search
                            </button>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Code" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Type" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Ville" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Number Bond" disabled></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mission as $missions)
                            <tr>
                                <td>{{$missions->code}}</td>
                                <td>{{$missions->type}}</td>
                                <td>{{$missions->ville}}</td>
                                <td>{{$missions->nmbonus}}</td>
                                <td>
                                    <button class="btn btn-info btn-xs" data-title="open" data-toggle="modal"
                                            data-target="#open{{ $missions->id }}">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </td>
                                <td>
                                    <a href="GestionMission/{{ $missions->id }}/edit" class="btn btn-success btn-xs"
                                       title="Edit"> <span class="fa fa-edit"></span></a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete{{ $missions->id }}">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </td>
                                <div class="modal fade" id="open{{ $missions->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    <span class="fa fa-remove" aria-hidden="true"></span>
                                                </button>
                                                <h4 class="modal-title custom_align" id="Heading">
                                                    <i class="fa fa-tags"></i> Mission __ #ID : {{$missions->id}}
                                            </div>
                                            <div class="modal-body">
                                                <ul class="open-info">
                                                    <li>Code :{{$missions->code}}</li>
                                                    <li>Type : {{$missions->type}}</li>
                                                    <li>Vehicule : {{ $missions->vehicule->matricule }}</li>
                                                    <li>Chauffeur: {{$missions->chauffeur->nom}}</li>
                                                    <li>Ville: {{$missions->ville}}</li>
                                                    <li>Date Depart: {{$missions->datedepart}}</li>
                                                    <li>Date Retour: {{$missions->dateretour}}</li>
                                                    <li>Km Deoart: {{$missions->kmdepart}}</li>
                                                    <li>Km Retour: {{$missions->kmretour}}</li>
                                                    <li>km Ville : {{$missions->kmville}}</li>
                                                    <li>Number Bond : {{$missions->nmbonus}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete{{ $missions->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    <span class="fa fa-remove" aria-hidden="true"></span>
                                                </button>
                                                <h4 class="modal-title custom_align" id="Heading">Delete this
                                                    entry {{ $missions->id }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-danger">
                                                    <span class="fa fa-warning-sign"></span> Are you sure you want to
                                                    delete this Mission ?
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                {!! Form::open(['method'=>'DELETE', 'route'=>['GestionMission.destroy',$missions->id]]) !!}
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
