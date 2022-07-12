@extends('layout.main')
@section('title')
    Cadastro
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h2 class="p-3">CADASTRO DE USUÁRIO</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center ">
                <h4 class="p-4">Cadastre-se</h4>
                <hr>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col-md-6">
                <button class="btn btn-outline-danger" style="width:100%; border-color: #c23321 !important;"><i class="fab fa-google mr-5"></i>Cadastrar com Google</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-outline-primary" style="width:100%; border-color: #2d4373 !important;"><i class="fab fa-facebook-f mr-5"></i>Cadastrar com Facebook</button>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-12">
                <div class="input-group">
                    <input class="form-control p-3 pt-4 pb-4" type="text" name="nome" required="true" placeholder="Nome Completo *">
                </div>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-8">
                <input class="form-control p-3 pt-4 pb-4" type="text" name="cpf" required="true" placeholder="CPF *" required="true">
            </div>
            <div class="col-md-4">
                <input class="form-control p-3 pt-4 pb-4" type="date" name="data" required="true" placeholder="DD/MM/AAAA" required="true">
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-4">
                <input class="form-control" name="sexo" placeholder="Sexo *" type="text" required="true"/>
            </div>
            <div class="col-md-4">
                <input class="form-control" name="celular" placeholder="Celular *" type="text" required="true"/>
            </div>
            <div class="col-md-4">
                <input class="form-control" name="telefone"  type="text" placeholder="Telefone"/>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-6">
                <input class="form-control" name="senha" placeholder="Senha *" type="text" required="true"/>
            </div>
            <div class="col-md-6">
                <input class="form-control" name="confirma_senha" palceholder="Repita a senha *" type="text" required="true"/>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-12">
                <input class="form-input-check" type="checkbox" name="termos"/>
                <label>Li e aceito os <b>termos de uso</b> e as <b>políticas de privacidade</b></label>
            </div>
            <div class="col-md-12">
                <input class="form-input-check" type="checkbox" name="ofertas_e_descontos"/>
                <label>
                    Quero receber ofertas e descontos exclusivos por email
                </label>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-12">
                <button class="btn btn-primary disabled" style="width:100%;">CRIAR CONTA</button>
            </div>
        </div>
    </div>
@endsection