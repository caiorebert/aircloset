<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container">

        <a class="navbar-brand" href="#"><img width="50px" src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline w-100 ml-lg-5 mr-lg-5">
                <div class="input-group w-100 mb-3 mt-1">
                    <input type="text" class="form-control" placeholder="Busque por produtos, marcas">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="collapse menu" id="collapseMenu">
                            <hr>
                            <ul>
                                <li>
                                    Mensagens
                                    <i class="fas fa-comment"></i>
                                </li>
                                <li>
                                    Perfil
                                    <i class="fas fa-user"></i>
                                </li>
                                <li>
                                    Carrinho
                                    <i class="fas fa-shopping-cart"></i>
                                </li>
                                <li>
                                    Logout
                                    <i class="fas fa-sign-out"></i>
                                </li>
                                <li data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" id="close-menu">
                                    Fechar
                                    <i class="fas fa-times"></i>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row desktop">
        <div class="col-md-2 text-center">
            <img src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png"/>
        </div>
        <div class="col-md-6">
            <input class="input-pesquisa form-control" type="text" name="search" placeholder="Busque por produtos, marcas..."/>
        </div>
        @if(auth()->check())
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    <a class="btn btn-secondary" href="{{ route('contato') }}" style="height: auto;">
                        <i class="fas fa-comment"></i>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <a class="btn btn-primary" href="{{ route('atualizarDados')}}" style="height: auto;">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class="btn btn-primary" href="{{ route('carrinho') }}" style="height: auto;">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a class="btn btn-danger" href="{{ route('deslogar') }}" style="height: auto;">
                        <i class="fas fa-sign-out"></i>
                    </a>
                </div>
            </form>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-comment"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@include('login.partials.modal_login')
<script>
    $(function(){
        $("#collapse-menu").click(function(){
            $(".menu").toggleClass("expanded");
            $(".menu .button-close").toggleClass("d-none");
        });
        $("#close-menu").click(function(){
            $(".menu").toggleClass("expanded");
            $(".menu .button-close").toggleClass("d-none");
        });
    });
</script>
