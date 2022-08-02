@extends('layout.main')
@section('content')
<div class="content">
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
                <form class="form" action="" method="post">
                    @csrf
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nome" required="true" style=" margin:auto;" placeholder="Nome *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" required="true" style=" margin:auto;" placeholder="Email *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="telefone" required="true" style=" margin:auto;" placeholder="Telefone *"/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder="Mensagem *" required="true"></textarea>
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