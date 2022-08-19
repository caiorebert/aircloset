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
