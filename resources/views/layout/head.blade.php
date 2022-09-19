@include('login.partials.modal_login')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="row mobile">
        <div class="col-md-12">
            <table style="width:100%;">
                <tr>
                    <td>
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png" />
                        </a>
                    </td>
                    <td style="text-align:right;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline w-100 ml-lg-5 mr-lg-5">
                <div class="input-group w-100 mb-3 mt-1">
                    <input type="text" class="form-control" placeholder="Busque por produtos, marcas">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            @if(auth()->check())
            <ul>
                <li>
                    <a style="width:100%; height:100%;">
                        Contato
                        <i class="fas fa-comment"></i>
                    </a>
                </li>
                <li>
                    <a style="width:100%; height:100%;">
                        Perfil
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li>
                    <a style="width:100%; height:100%;">
                        Carrinho
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
                <li>
                    <a style="width:100%; height:100%;" href="{{ route('deslogar') }}">
                        Logout
                        <i class="fas fa-sign-out"></i>
                    </a>
                </li>
                <!--<li data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false"
                    aria-controls="collapseMenu" id="close-menu">
                    Fechar
                    <i class="fas fa-times"></i>
                </li>-->
            </ul>
            @else
            <ul>
                <li>
                    <a style="width:100%; height:100%;" href="{{ route('cadastro') }}">
                        Cadastro
                    </a>
                </li>
                <li>
                    <a style="width:100%; height:100%;" href="{{ route('login') }}">
                        Entrar
                    </a>
                </li>
                <!--<li data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false"
                    aria-controls="collapseMenu" id="close-menu">
                    Fechar
                    <i class="fas fa-times"></i>
                </li>-->
            </ul>
            @endif
        </div>
    </div>
    <div class="row desktop">
        <div class="col-md-2 text-center">
            <a href="{{ route('index') }}">
                <img style="width: 20%;" class="img-fluid" src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png" />
            </a>
        </div>
        <div class="col-md-6" style="display:inline-block">
            <div class="input-group">
                <input class="input-pesquisa form-control" type="text" name="search"
                    placeholder="Busque por produtos, marcas..."/>
                <span class="input-group-text pt-2" id="basic-addon1"><i class="fa-solid fa-magnifying-glass pt-2"></i></span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                @if(auth()->check())
                <div class="col-md-3 text-center">
                    <a class="btn btn-secondary" href="{{ route('contato') }}" style="height: auto;">
                        <i class="fas fa-comment"></i>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <a class="btn btn-primary-aircloset" href="{{ route('atualizarDados')}}" style="height: auto;">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class="btn btn-primary-aircloset" href="{{ route('carrinho') }}" style="height: auto;">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="notificationCount"></span>
                    </a>
                    <a class="btn btn-primary-aircloset" href="{{ route('meus-cupons') }}" style="height: auto;">
                        <i class="fas fa-ticket"></i>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a class="btn btn-danger" href="{{ route('deslogar') }}" style="height: auto;">
                        <i class="fas fa-sign-out"></i>
                    </a>
                </div>
                @else
                <div class="col-md-12">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-comment"></i></a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</nav>
<script>
    function countProdutos(){
        $.post("{{ route('count-produtos') }}", { '_token' : '{{ csrf_token() }}' }, function(response){
            $("#notificationCount").html(response);
        });
    }
    $(function () {
        $("#collapse-menu").click(function () {
            $(".menu").toggleClass("expanded");
            $(".menu .button-close").toggleClass("d-none");
        });
        $("#close-menu").click(function () {
            $(".menu").toggleClass("expanded");
            $(".menu .button-close").toggleClass("d-none");
        });
        countProdutos();
    });

</script>
