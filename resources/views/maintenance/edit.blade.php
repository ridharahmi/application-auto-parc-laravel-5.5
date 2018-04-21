@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-pencil"></i> Edit Maintenance</div>
                    <div class="panel-body text-center">
                        {!! Form::model($maintenance, array('class'=>'form-horizontal', 'method'=>'PATCH','action'=>['MaintenanceController@update',$maintenance->id],'files'=>true)) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('matricule') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Matricule</label>
                            <div class="col-md-8">
                                {!! Form::select('matricule', $vehicule,null, array('class'=>'form-control','placeholder'=>'Choose vehicule')) !!}
                                @if ($errors->has('matricule')) <span
                                        class="help-block"> {{ $errors->first('matricule') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Type</label>
                            <div class="col-md-8">
                                {{ Form::select('type',
                                   [
                                     'taxe' => 'taxe',
                                     'taxe 1' => 'taxe 1',
                                     'taxe 2' => 'taxe 2',
                                     'taxe 3' => 'taxe 3']
                                     ,null,['class'=>'form-control']) }}
                                @if ($errors->has('type')) <span
                                        class="help-block"> {{ $errors->first('type') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('for_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Fournisseur</label>
                            <div class="col-md-8">
                                {!! Form::select('for_id', $fournisseur,null, array('class'=>'form-control','placeholder'=>'Choose fournisseur')) !!}
                                @if ($errors->has('for_id')) <span
                                        class="help-block"> {{ $errors->first('for_id') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Date</label>
                            <div class="col-md-8">
                                {!! Form::date('date', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('date')) <span
                                        class="help-block"> {{ $errors->first('date') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cout') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Cout</label>
                            <div class="col-md-8">
                                {!! Form::number('cout', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('cout')) <span
                                        class="help-block"> {{ $errors->first('cout') }} </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kmveh') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">kmVehicule</label>
                            <div class="col-md-8">
                                {!! Form::number('kmveh', null, array('class'=>'form-control')) !!}
                                @if ($errors->has('kmveh')) <span
                                        class="help-block"> {{ $errors->first('kmveh') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-reply"></i> Register
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