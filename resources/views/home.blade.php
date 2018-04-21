@extends('layouts.app')

@section('content')
    <div class="home container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-cog fa-fin fa-spin fa-2x"></i> Etat du Parc</div>
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-lg-9">
                            <div class="col-lg-3">
                                <div class="item">
                                    <h3><i class="fa fa-car fa-fw fa-2x"></i> {{ $vda }}</h3>
                                    <p>Nombre de vehicules disponibles</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item">
                                    <h3><i class="fa fa-bus fa-fw fa-2x"></i> {{ $vm }}</h3>
                                    <p>Nombre de vehicules en marche</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item">
                                    <h3><i class="fa fa-car fa-fw fa-2x"></i> {{ $vp  }}</h3>
                                    <p>Nombre de vehicules en panne</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-bus fa-fw fa-2x"></i> {{ $vr }}</h3>
                                    <p>Nombre de vehicules en réparation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-user fa-fw fa-2x"></i> {{$cd  }}</h3>
                                    <p>Nombre chauffeurs disponibles</p>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="item">
                                    <h3><i class="fa fa-user-o fa-fw fa-2x"></i> {{ $cnd  }}</h3>
                                    <p>Nombre chauffeurs non disponibles</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-male fa-fw fa-2x"></i> {{ $for  }}</h3>
                                    <p>Nombre de fournisseurs</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-tags fa-fw fa-2x"></i> {{$miss}}</h3>
                                    <p>Nombre de mission en cours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-reply fa-fw fa-2x"></i> {{  $main }}</h3>
                                    <p>Nombre de maintenance</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-file fa-fw fa-2x"></i> {{$sins}}</h3>
                                    <p>Nombre de sinsitre</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="item">
                                    <h3><i class="fa fa-file-pdf-o fa-fw fa-2x"></i> {{$pap}}</h3>
                                    <p>Nombre de Papiers</p>
                                </div>
                            </div>
                                </div>
                            <div class="col-lg-3 ">
                                <img src="{{asset('images/voiture.jpg')}}" class="img-thumbnail img-home">
                                <img src="{{asset('images/chauffeur.jpg')}}" class="img-thumbnail img-home">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
