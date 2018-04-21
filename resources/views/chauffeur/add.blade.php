@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-user"></i> Add New Chauffeur</div>
                    <div class="panel-body text-center">
                        {!! Form::open(array('class'=>'form-horizontal','route'=>'GestionChauffeur.store','files'=>true)) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('matricule') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Matricule</label>
                            <div class="col-md-8">
                                {!! Form::text('matricule', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('matricule')) <span
                                        class="help-block"> {{ $errors->first('matricule') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Nom</label>
                            <div class="col-md-8">
                                {!! Form::text('nom', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('nom')) <span
                                        class="help-block"> {{ $errors->first('nom') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cin') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Cin</label>
                            <div class="col-md-8">
                                {!! Form::text('cin', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('cin')) <span
                                        class="help-block"> {{ $errors->first('cin') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Telephone</label>
                            <div class="col-md-8">
                                {!! Form::text('tel', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('tel')) <span
                                        class="help-block"> {{ $errors->first('tel') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Adresse</label>
                            <div class="col-md-8">
                                {!! Form::text('adresse', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('adresse')) <span
                                        class="help-block"> {{ $errors->first('adresse') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('etat') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Etat</label>
                            <div class="col-md-8">
                                {{ Form::select('etat',
                                  [
                                    'Non Disponible' => 'Non Disponible',
                                    'Disponible' => 'Disponible']
                                    ,null,['class'=>'form-control']) }}
                                @if ($errors->has('etat')) <span
                                        class="help-block"> {{ $errors->first('etat') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection