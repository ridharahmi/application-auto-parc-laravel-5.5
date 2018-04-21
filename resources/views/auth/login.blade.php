@extends('layouts.page')

@section('content')
    <div class="col-md-7 col-md-offset-2">
        <div class="panel panel-primary" style="margin-top: 100px;">
            <div class="panel-heading"><i class="fa fa-user"></i> Authentification</div>
            <div class="panel-body text-center">
                <img class="img-login" src="{{ asset('images/login.jpg') }}">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Email :</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">@</div>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">mot de passe :</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                <input id="password" type="password" class="form-control" name="password"
                                       required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-sign-in"></i> Connexion
                            </button>
                            <br>
                            <a class="btn btn-link" href="{{ url('register') }}">
                                Créer Un Compte ?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
