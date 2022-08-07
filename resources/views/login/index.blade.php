@extends('layout.main')
@section('content')
    <div class="content">
        <div class="row pt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png" width="20%"/>
                    </div>
                    <div class="col-md-12 text-center">
                        <hr>
                        <h3>AirCloset - Login</h3>
                    </div>
                </div>
                <form action="{{ route('logar') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <input class="form-control" type="text" name="email" placeholder="Login"/>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <input class="form-control" type="password" name="password" placeholder="Senha"/>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-md-6">
                        <button class="btn btn-outline-danger" style="width:100%; border-color: #c23321 !important;"><i class="fab fa-google mr-5"></i>Cadastrar com Google</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary" style="width:100%; border-color: #2d4373 !important;"><i class="fab fa-facebook-f mr-5"></i>Cadastrar com Facebook</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-primary" value="ENTRAR"/>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection