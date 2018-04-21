@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-tags"></i> Add New Mission</div>
                    <div class="panel-body text-center">
                        {!! Form::open(array('class'=>'form-horizontal','route'=>'GestionMission.store','files'=>true)) !!}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Code</label>
                                    <div class="col-md-8">
                                        {!! Form::text('code', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('code')) <span
                                                class="help-block"> {{ $errors->first('code') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Type</label>
                                    <div class="col-md-8">
                                        {{ Form::select('type',
                                           [
                                             'Locale' => 'Locale',
                                             'Locale 1' => 'Locale 1',
                                             'Locale 2' => 'Locale 2',
                                             'Locale 3' => 'Locale 3']
                                             ,null,['class'=>'form-control']) }}
                                        @if ($errors->has('type')) <span
                                                class="help-block"> {{ $errors->first('type') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('vihicule_id') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Vehicule</label>
                                    <div class="col-md-8">
                                        {!! Form::select('vihicule_id', $vehicule,null, array('class'=>'form-control','placeholder'=>'Choose Vehicule')) !!}
                                        @if ($errors->has('vihicule_id')) <span
                                                class="help-block"> {{ $errors->first('vihicule_id') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('chaffeur_id') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Chauffeur</label>
                                    <div class="col-md-8">
                                        {!! Form::select('chaffeur_id', $chauffeur,null, array('class'=>'form-control','placeholder'=>'Choose chauffeur')) !!}
                                    @if ($errors->has('chaffeur_id')) <span
                                                class="help-block"> {{ $errors->first('chaffeur_id') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('datedepart') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">DateDepart</label>
                                    <div class="col-md-8">
                                        {!! Form::date('datedepart', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('datedepart')) <span
                                                class="help-block"> {{ $errors->first('datedepart') }} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('dateretour') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">DateRetour</label>
                                    <div class="col-md-8">
                                        {!! Form::date('dateretour', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('dateretour')) <span
                                                class="help-block"> {{ $errors->first('dateretour') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('kmdepart') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">KmDepart</label>
                                    <div class="col-md-8">
                                        {!! Form::number('kmdepart', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('kmdepart')) <span
                                                class="help-block"> {{ $errors->first('kmdepart') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('kmretour') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">KmRetour</label>
                                    <div class="col-md-8">
                                        {!! Form::number('kmretour', null, array('class'=>'form-control')) !!}
                                        @if ($errors->has('kmretour')) <span
                                                class="help-block"> {{ $errors->first('kmretour') }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Ville</label>
                                    <div class="col-md-8">
                                        {{ Form::select('ville',
                                           [
                                             'Ariana' => 'Ariana',
                                             'Beja' => 'Beja',
                                             'Ben Arous' => 'Ben Arous',
                                             'Bizerte' => 'Bizerte',
                                             'Gabes' => 'Gabes',
                                             'Gafsa' => 'Gafsa',
                                             'Jendouba' => 'Jendouba',
                                              'Kairouan' => 'Kairouan',
                                              'Kasserine' => 'Kasserine',
                                              'Kebili' => 'Kebili',
                                              'Le Kef' => 'Le Kef',
                                              'Mahdia' => 'Mahdia',
                                              'Manouba' => 'Manouba',
                                              'Medenine' => 'Medenine',
                                              'Monastir' => 'Monastir',
                                              'Nabeul' => 'Nabeul',
                                              'Sfax' => 'Sfax',
                                              'Sidi Bouzid' => 'Sidi Bouzid',
                                              'Siliana' => 'Siliana',
                                              'Sousse' => 'Sousse',
                                              'Tataouine' => 'Tataouine',
                                              'Tozeur' => 'Tozeur',
                                              'Tunis' => 'Tunis',
                                              'Zaghouan' => 'Zaghouan']
                                             ,null,['class'=>'form-control']) }}
                                        @if ($errors->has('ville')) <span
                                                class="help-block"> {{ $errors->first('ville') }} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-tag"></i> Register
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