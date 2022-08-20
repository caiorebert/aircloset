<header>

    <div class="row mobile">
        <div class="col-md-6 pr-0 pl-0">
            <table width="100%">
                <tr>
                    <td>
                        <img src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png"/>
                    </td>
                    <td style="width:80%; text-align:right;">
                        <a class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
                            <i class="fas fa-bars"></i>
                        </a>

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
                <div class="col-md-3 button-close d-none">
                    <button class="btn btn-primary" id="close-menu">X</button>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6" style="text-align:right;">
                    <a class="btn btn-secondary" style="height:auto;">
                        CADASTRE-SE
                    </a>
                </div>
                <div class="col-md-6" style="text-align:left;" data-toggle="modal" data-target="#modalLogin">
                    <a class="btn btn-primary" style="height:auto;">
                        ENTRAR
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</header>
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
