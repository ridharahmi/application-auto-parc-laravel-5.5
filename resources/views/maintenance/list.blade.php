@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="GestionMaintenance/create"><i class="fa fa-plus"></i> Add New Maintenance</a>
                </div>
                @include('message')
                <div class="panel panel-default filterable">
                    <div class="panel-heading">
                        <div class="panel-title"><i class="fa fa-reply"></i> Listes Maintenance</div>
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
                            <th><input type="text" class="form-control" placeholder="Type" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Cout" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Km Vehicule" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Fournisseur" disabled></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($maintenance as $maintenances)
                            <tr>
                                <td>{{ $maintenances->vehicule->matricule }}</td>
                                <td>{{ $maintenances->type }}</td>
                                <td>{{ $maintenances->date }}</td>
                                <td>{{ $maintenances->cout }}</td>
                                <td>{{ $maintenances->kmveh }}</td>
                                <td>{{ $maintenances->fournisseur->nom }}</td>
                                <td>
                                    <a href="GestionMaintenance/{{ $maintenances->id }}/edit" class="btn btn-success btn-xs"
                                       title="Edit"> <span class="fa fa-edit"></span></a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete{{ $maintenances->id }}">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </td>
                                <div class="modal fade" id="delete{{ $maintenances->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    <span class="fa fa-remove" aria-hidden="true"></span>
                                                </button>
                                                <h4 class="modal-title custom_align" id="Heading">Delete this
                                                    entry {{ $maintenances->id }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-danger">
                                                    <span class="fa fa-warning-sign"></span> Are you sure you want to
                                                    delete this Mission ?
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                {!! Form::open(['method'=>'DELETE', 'route'=>['GestionMaintenance.destroy',$maintenances->id]]) !!}
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
