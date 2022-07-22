<style type="text/css">
    header {
        position: relative;
        height: 8vh;
        box-shadow: 1px 1px 10px rgb(0, 0, 0, 0.5);
    }
    header .row {
        position: relative;
        margin: 0px !important;
        padding-top: 5px;
        padding-bottom: 5px;
        height: 100% !important;
    }
    header * {
        height: 100%;
    }
    header .input-pesquisa {
        position: absolute;
        margin:auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 80%;
    }
    header .lista-opcoes {
        position: relative;
        
    }
    header .lista-opcoes li {
        color: black;
        display: inline-block;
    }
</style>
<header>
    <div class="row">
        <div class="col-md-2 text-center">
            <img src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png" />
        </div>
        <div class="col-md-6">
            <input class="input-pesquisa form-control" type="text" name="search" placeholder="Busque por produtos, marcas..."/>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    <a class="btn btn-secondary" style="height: auto;">
                        <i class="fas fa-comment"></i>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <a class="btn btn-primary" style="height: auto;">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class="btn btn-primary" style="height: auto;">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a class="btn btn-danger" style="height: auto;">
                        <i class="fas fa-sign-out"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
