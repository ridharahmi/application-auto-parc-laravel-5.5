@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-file"></i> Add New Sinistre</div>
                    <div class="panel-body text-center">
                        {!! Form::model($sinistres, array('class'=>'form-horizontal', 'method'=>'PATCH','action'=>['SinistreController@update',$sinistres->id],'files'=>true)) !!}
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
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Date</label>
                            <div class="col-md-8">
                                {!! Form::date('date', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('date')) <span
                                        class="help-block"> {{ $errors->first('date') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mantdep') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Mantant depensé</label>
                            <div class="col-md-8">
                                {!! Form::number('mantdep', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('mantdep')) <span
                                        class="help-block"> {{ $errors->first('mantdep') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mantremb') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Mantant rembourssé</label>
                            <div class="col-md-8">
                                {!! Form::number('mantremb', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('mantremb')) <span
                                        class="help-block"> {{ $errors->first('mantremb') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('chaffeur_id') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Chauffeur</label>
                            <div class="col-md-8">
                                {!! Form::select('chaffeur_id', $chauffeur,null, array('class'=>'form-control','placeholder'=>'Choose chauffeur')) !!}
                            @if ($errors->has('chaffeur_id')) <span
                                        class="help-block"> {{ $errors->first('chaffeur_id') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-file"></i> Register
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