@extends('layout.main')
@section('css')
    <style>
        .alerts {
            position: absolute;
            margin:auto;
            padding-top:10px;
            padding-right:10px;
            right:10px;
            font-size:1em;
            height: 30vh;
            z-index: 50;
            width: 30vw;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="alerts">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <label>{{ $error }}</label>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <label><?=session('success')['success'] ?></label>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        <div class="row pt-5">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h1 class="title">FORMULÁRIO DE CONTATO</h1>
                <p class="mt-5">
                    Prezado cliente, para entrar em contato conosco, por favor preencha o formulário abaixo com as respectivas informações. A sua mensagem será direcionada para nossos atendentes que responderão através de e-mail ou tentarão contato através do número fornecido.
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
                <form class="form" action="{{ route('sendMessage') }}" method="post">
                    @csrf
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nome"  style=" margin:auto;" placeholder="Nome *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email"  style=" margin:auto;" placeholder="Email *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="telefone"  style=" margin:auto;" placeholder="Telefone *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <textarea class="form-control" name="mensagem" placeholder="Mensagem *" ></textarea>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="btn btn-lg btn-outline-primary disabled" style="width:100%;" type="submit" value="ENVIAR">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
