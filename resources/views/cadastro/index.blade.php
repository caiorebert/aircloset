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
        <form action="{{ route('cadastro') }}" method="post">
            @csrf
            <div class="row pt-4 pb-4">
                <div class="col-md-12">
                    <div class="input-group">
                        <input class="form-control {{ ($errors->get('nome')) ? 'border-danger' : '' }} p-3 pt-4 pb-4 " type="text" name="nome"  placeholder="Nome Completo *">
                    </div>
                    @if($errors->any())
                        @if($errors->get('nome'))
                            <label class="text-danger"><?=$errors->get('nome')[0]?></label>
                        @endif
                    @endif
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-md-12">
                    <div class="input-group">
                        <input class="form-control {{ ($errors->get('email')) ? 'border-danger' : '' }} p-3 pt-4 pb-4" type="text" name="email"  placeholder="Email *"/>
                    </div>
                    @if($errors->any())
                        @if($errors->get('email'))
                            <label class="text-danger"><?=$errors->get('email')[0]?></label>
                        @endif
                    @endif
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-md-7">
                    <input id="cpf" class="form-control {{ ($errors->get('cpf')) ? 'border-danger' : '' }} p-3 pt-4 pb-4" type="text" name="cpf"  placeholder="CPF *"/>
                    @if($errors->any())
                        @if($errors->get('cpf'))
                            <label class="text-danger"><?=$errors->get('cpf')[0]?></label>
                        @endif
                    @endif
                </div>
                <div class="col-md-5">
                    <input class="form-control {{ ($errors->get('data')) ? 'border-danger' : '' }} p-3 pt-4 pb-4" type="date" name="data"  placeholder="Data de nascimento"/>
                    @if($errors->any())
                        @if($errors->get('data'))
                            <label class="text-danger"><?=$errors->get('data')[0]?></label>
                        @endif
                    @endif
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-md-4">
                    <select class="form-control {{ ($errors->get('sexo')) ? 'border-danger' : '' }}" name="sexo">
                        <option value="">Sexo *</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outro</option>
                    </select>
                    @if($errors->any())
                        @if($errors->get('sexo'))
                            <label class="text-danger"><?=$errors->get('sexo')[0]?></label>
                        @endif
                    @endif
                </div>
                <div class="col-md-4">
                    <input id="celular" class="form-control {{ ($errors->get('celular')) ? 'border-danger' : '' }}" name="celular" placeholder="Celular *" type="text"/>
                    @if($errors->any())
                        @if($errors->get('celular'))
                            <label class="text-danger"><?=$errors->get('celular')[0]?></label>
                        @endif
                    @endif
                </div>
                <div class="col-md-4">
                    <input id="telefone" class="form-control" name="telefone"  type="text" placeholder="Telefone"/>
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-md-6">
                    <input class="form-control {{ ($errors->get('senha')) ? 'border-danger' : '' }}" name="senha" placeholder="Senha *" type="password"/>
                    @if($errors->any())
                        @if($errors->get('senha'))
                            <label class="text-danger"><?=$errors->get('senha')[0]?></label>
                        @endif
                    @endif
                </div>
                <div class="col-md-6">
                    <input class="form-control {{ ($errors->get('confirma_senha')) ? 'border-danger' : '' }}" name="confirma_senha" placeholder="Repita a senha *" type="password"/>
                    @if($errors->any())
                        @if($errors->get('confirma_senha'))
                            <label class="text-danger"><?=$errors->get('confirma_senha')[0]?></label>
                        @endif
                    @endif
                </div>
            </div>
        <div class="row pt-4 pb-4">
            <div class="col-md-12">
                <input class="form-input-check" type="checkbox" name="termos"/>
                <label>Li e aceito os <b>termos de uso</b> e as <b>políticas de privacidade</b></label>
                @if($errors->any())
                    @if($errors->get('termos'))
                        <br>
                        <label class="text-danger"><?=$errors->get('termos')[0]?></label>
                    @endif
                @endif
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
                <input type="submit" name="submit" class="btn btn-primary-aircloset" style="width:100%;" value="CRIAR CONTA"/>
            </div>
        </div>
        </form>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    $(function(){
        $("#cpf").mask("000.000.000-00");
        $("#celular").mask("(00) 0 0000-0000");
        $("#telefone").mask("0000-0000");
    });
</script>
@endsection