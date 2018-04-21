@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-car"></i> Add New Vehicules</div>
                    <div class="panel-body text-center">
                        {!! Form::open(array('class'=>'form-horizontal','route'=>'GestionVehicules.store','files'=>true)) !!}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('matricule') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Matricule</label>
                                    <div class="col-md-8">
                                        {!! Form::text('matricule', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('matricule')) <span
                                                class="help-block"> {{ $errors->first('matricule') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('modele') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Modele</label>
                                    <div class="col-md-8">
                                        {{ Form::select('modele',
                                           [
                                             'Nemo' => 'Nemo',
                                             'Audi' => 'Audi',
                                             'Austin' => 'Austin',
                                             'Bmw' => 'Bmw',
                                             'Citroen' => 'Citroen',
                                             'Peugeot' => 'Peugeot',
                                             'Toyota' => 'Toyota',
                                             'Renault' => 'Renault']
                                             ,null,['class'=>'form-control', 'id'=>'modele','placeholder'=>'Choose modele']) }}
                                        @if ($errors->has('modele')) <span
                                                class="help-block"> {{ $errors->first('modele') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('marque') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Marque</label>
                                    <div class="col-md-8">
                                        <select name="marque" id="marque" class="form-control"></select>
                                        @if ($errors->has('marque')) <span
                                                class="help-block"> {{ $errors->first('marque') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('affectation') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Affectation</label>
                                    <div class="col-md-8">
                                        {!! Form::text('affectation', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('affectation')) <span
                                                class="help-block"> {{ $errors->first('affectation') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('carte') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Carte Grise</label>
                                    <div class="col-md-8">
                                        {!! Form::text('carte', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('carte')) <span
                                                class="help-block"> {{ $errors->first('carte') }} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Type carburant</label>
                                    <div class="col-md-8">
                                        {{ Form::select('type',
                                         [
                                           'Essence' => 'Essence',
                                           'Gazole' => 'Gazole ',
                                           'Diesel' => 'Diesel',
                                           'GPL' => 'GPL']
                                           ,null,['class'=>'form-control']) }}
                                        @if ($errors->has('type')) <span
                                                class="help-block"> {{ $errors->first('type') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('valeur') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Valeur d'achat (DT)</label>
                                    <div class="col-md-8">
                                        {!! Form::number('valeur', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('valeur')) <span
                                                class="help-block"> {{ $errors->first('valeur') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('etat') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Etat Actuelle</label>
                                    <div class="col-md-8">
                                        {{ Form::select('etat',
                                          [
                                            'En marche' => 'En marche',
                                            'En panne' => 'En panne',
                                            'En réparation' => 'En réparation',
                                            'Disponible' => 'Disponible']
                                            ,null,['class'=>'form-control']) }}
                                        @if ($errors->has('etat')) <span
                                                class="help-block"> {{ $errors->first('etat') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Date d'acquisation</label>
                                    <div class="col-md-8">
                                        {!! Form::date('date', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('date')) <span
                                                class="help-block"> {{ $errors->first('date') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('kilometrage') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">kilométrage</label>
                                    <div class="col-md-8">
                                        {!! Form::number('kilometrage', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('kilometrage')) <span
                                                class="help-block"> {{ $errors->first('kilometrage') }} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-car"></i> Register
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