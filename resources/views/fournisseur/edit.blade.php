@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-male"></i> Edit Fournisseur</div>
                    <div class="panel-body text-center">
                        {!! Form::model($fournisseur, array('class'=>'form-horizontal', 'method'=>'PATCH','action'=>['FournisseurController@update',$fournisseur->id],'files'=>true)) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Code</label>
                            <div class="col-md-8">
                                {!! Form::text('code', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('code')) <span
                                        class="help-block"> {{ $errors->first('code') }} </span>
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
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-8">
                                {!! Form::email('email', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('email')) <span
                                        class="help-block"> {{ $errors->first('email') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Fax</label>
                            <div class="col-md-8">
                                {!! Form::text('fax', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('fax')) <span
                                        class="help-block"> {{ $errors->first('fax') }} </span>
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
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-edit"></i> Edit
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