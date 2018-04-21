@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-file-pdf-o"></i> Add New Papier</div>
                    <div class="panel-body text-center">
                        {!! Form::model($papier, array('class'=>'form-horizontal', 'method'=>'PATCH','action'=>['PapierController@update',$papier->id],'files'=>true)) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Code</label>
                            <div class="col-md-8">
                                {!! Form::text('code', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('code')) <span
                                        class="help-block"> {{ $errors->first('code') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mantant') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Mantant</label>
                            <div class="col-md-8">
                                {!! Form::number('mantant', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('mantant')) <span
                                        class="help-block"> {{ $errors->first('mantant') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('categorie') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Categorie</label>
                            <div class="col-md-8">
                                {{ Form::select('categorie',
                                 [
                                   'Categorie' => 'Categorie',
                                   'Categorie 1' => 'Categorie 1',
                                   'Categorie 2' => 'Categorie 2',
                                   'Categorie 3' => 'Categorie 3']
                                   ,null,['class'=>'form-control']) }}
                                @if ($errors->has('categorie')) <span
                                        class="help-block"> {{ $errors->first('categorie') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('matricule') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Matricule</label>
                            <div class="col-md-8">
                                {!! Form::select('matricule', $vehicule,null, array('class'=>'form-control','placeholder'=>'Choose Vehicule')) !!}
                            @if ($errors->has('matricule')) <span
                                        class="help-block"> {{ $errors->first('matricule') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('datepaiement') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Date Paiement</label>
                            <div class="col-md-8">
                                {!! Form::date('datepaiement', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('datepaiement')) <span
                                        class="help-block"> {{ $errors->first('datepaiement') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dateechance') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Date echèance</label>
                            <div class="col-md-8">
                                {!! Form::date('dateechance', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('dateechance')) <span
                                        class="help-block"> {{ $errors->first('dateechance') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-file-pdf-o"></i> Register
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