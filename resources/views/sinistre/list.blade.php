@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="GestionSinistre/create"><i class="fa fa-plus"></i> Add New Sinistre</a>
                </div>
                @include('message')
                <div class="panel panel-default filterable">
                    <div class="panel-heading">
                        <div class="panel-title"><i class="fa fa-file"></i> Listes Sinistre</div>
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
                            <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Mantant Déponsé" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Mantant rembourssé" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Chauffeur" disabled></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sinistre as $sinistres)
                            <tr>
                                <td>{{$sinistres->code}}</td>
                                <td>{{$sinistres->date}}</td>
                                <td>{{$sinistres->mantdep}}</td>
                                <td>{{$sinistres->mantremb}}</td>
                                <td>{{$sinistres->chauffeur->nom}}</td>
                                <td>
                                    <a href="GestionSinistre/{{ $sinistres->id }}/edit" class="btn btn-success btn-xs"
                                       title="Edit"> <span class="fa fa-edit"></span></a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete{{ $sinistres->id }}">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete{{ $sinistres->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="fa fa-remove" aria-hidden="true"></span>
                                            </button>
                                            <h4 class="modal-title custom_align" id="Heading">Delete this
                                                entry {{ $sinistres->id }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                <span class="fa fa-warning-sign"></span> Are you sure you want to delete
                                                this Sinistre ?
                                            </div>
                                        </div>
                                        <div class="modal-footer ">
                                            {!! Form::open(['method'=>'DELETE', 'route'=>['GestionSinistre.destroy',$sinistres->id]]) !!}
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
