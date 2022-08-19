@extends('layout.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/franqueado.css')}}">
@endsection
@section('content')
    <div class="content">
        <div class="row pt-5">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h1 class="title text-sm-center">SEJA UM FRANQUEADO</h1>
                <p class="mt-5">
                    Seja um franqueado da <b>AirCloset</b> e faça parte da maior franquia de compartilhamento do brasil. MODELO INOVADOR, RENTÁVEL, SUSTENTÁVEL E DE BAIXA CONCORRÊNCIA. Você ganha dinheiro, ajuda a preservar o meio ambiente, incentiva o consumo responsável, e investe no modelo mais inteligente de economia no mundo; a economia compartilhada.
                </p>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <h2 class="sub-title">Preencha os campos abaixo</h2>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
                <form class="form" action="{{ route('cadastrar-franqueado') }}" method="post">
                    @csrf
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nome" style=" margin:auto;" placeholder="Nome *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" style=" margin:auto;" placeholder="Email *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="telefone" style=" margin:auto;" placeholder="Telefone *"/>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="celular" style=" margin:auto;" placeholder="Celular *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="cep" style=" margin:auto;" placeholder="CEP *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="btn btn-outline-primary disabled" style="width:100%;" type="submit" value="CADASTRAR">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
