<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AirCloset | Início</title>
        <link rel="icon" href="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            footer {
                background-color: black;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            .container-fluid {
                width: 94%;
            }

            .logotitulo {
                writing-mode: vertical-rl;
                font-size: 30px;
                transform: rotate(180deg);
            }

            hr {
                background-color: white;
                height: 2px;
                width: 50%;
                margin-left: 0;
            }

            @media only screen and (max-width: 400px) {
                .mobile-hide{ display: none !important; }
                }
                @media only screen and (max-width: 400px) {
                .mobile{ display: inline !important; }
                }
                @media only screen and (min-width: 500px) {
                .desktop-hide{ display: none !important; }
                }
        </style>
    </head>
    <body>
        @include('login.partials.modal_login')
        <nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <a href="./" class="navbar-brand"><h1>AIR<b>CLOSET</b></h1></a>
                <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle Navbar">
                    <span navbar-toggler-icon></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="https://blog.aircloset.com.br/" class="nav-link text"><b>Blog</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="seja-franqueado" class="nav-link text"><b>Seja um franqueado</b></a>
                        </li>
                        @if(auth()->check())
                            <li class="nav-item">
                                <a href="{{ route('atualizarDados') }}" class="nav-link text">Olá, bem vindo <b>{{ explode(" ", auth()->user()->nome)[0] }}</b></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('deslogar') }}" class="nav-link text">Logout <i class="fas fa-logout"></i></a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('cadastro') }}" class="nav-link text"><b>Cadastre-se</b></a>
                            </li>
                            <li class="nav-item">
                                <a style="cursor:pointer;" data-toggle="modal" data-target="#modalLogin" class="nav-link text"><b>Entrar</b></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Section Principal -->
        <div id="principal" style="background-repeat: no-repeat; background-size: cover;" class="jumbotron h-100 d-flex justify-content-center bg-cover text-white">
            <div style="margin-top: 10%;" class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold"> Alugue, economize e descomplique sua viagem. </h1>
                <p class="font-bold mb-0"> Decida pelo aluguel de casacos e invista em uma nova forma de consumo sustentável. </p>
                <div class="mt-5 bg-white rounded-lg">
                    <form>
                        <div class="form-row p-4">

                            <div class="col-sm-12 col-md-4 col-lg-3 mt-1">
                                <select class="form-control">
                                    <option>Todos</option>
                                    <option>Casacos</option>
                                    <option>Guarda-chuva</option>
                                    <option>Itens de viagem</option>
                                    <option>Acessórios de inverno</option>
                                    <option>Botas e sapatos</option>
                                    <option>Vestidos e saias</option>
                                </select>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-3 mt-1">
                                <select class="form-control">
                                    <option>Gramado - RS</option>
                                    <option>Campos do Jordão - SP</option>
                                </select>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-2 mt-1">
                                <input type="date" class="form-control" id="check-in">
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-2 mt-1">
                                <input type="date" class="form-control" id="checkout">
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-2 mt-1">
                                <button type="button" class="btn btn-primary btn-block">BUSCAR</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Seção 1 -->
        <div style="background: url(https://thiagoprogramando.com.br/nuvem_aircloset/viagem.jpg) no-repeat; background-size: cover; min-height: 500px;" class="jumbotron h-100 w-100 bg-cover text-dark">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6"></div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h4 class="text-center">Apresentando <b>AIRCLOSET</b></h4>
                    <p class="text-justify text-bold">A primeira plataforma de economia circular online de aluguel de casacos, botas e itens de viagem no Brasil. Possuímos loja física em Gramado-RS e Campos de Jordão-SP. Em breve estaremos em outras cidades do país. Nosso objetivo é revolucionar o universo da economia colaborativa no Brasil, a partir de um consumo inovador, consciente e sustentável.</p>
                    <center><a class="btn btn-primary p-2" href="">Saiba mais</a></center>
                </div>
            </div>
        </div>

        <!-- Seção 2 -->
        <div class="jumbotron v-100 w-100 text-white container d-flex justify-content-center">
            <img style="width: 100%; height: 100%;" src="https://thiagoprogramando.com.br/nuvem_aircloset/reciclagem-aircloset.png">
        </div>

        <!-- Seção 3 -->
        <div class="container">
            <div class="row">

                <div style="background-color: #F1F1F1;" class="col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-dark row p-5">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <h4><b> ALUGUE & ARRASE </b></h4> <br>
                        <p>Selecione o produto desejado e a cidade que irá se hospedar. Escolha o período de aluguel, o horário de retirada ou, se preferir, limpe as datas caso não tenha data confirmada e clique em buscar.Caso opte por apenas uma diária de cada peça, é necessário também limpar as datas. <br><br></p>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 d-flex justify-content-center">
                        <img src="https://thiagoprogramando.com.br/nuvem_aircloset/alugue-arrase.png">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <p>
                            Depois de escolher, clique no produto desejado. Escolha data e horário de retirada e devolução. Ao lado direito no mapa, visualize a loja de retirada. <br><br>
                            Você receberá um voucher no e-mail cadastrado com todas as informações de horário, data e local de retirada. <br><br>
                            Caso a loja possua opção de delivery, você receberá o produto no seu hotel e a devolução também é feita pela loja no mesmo local dentro do horário e data pré agendados no seu voucher no momento da reserva. O Delivery é pago separadamente através do WhatsApp. Ao concluir a compra, é só entrar em contato através do link que se encontra logo no fim da página, responder a opção de delivery, enviar o número do pedido e finalizar seu delivery. <br><br>
                            Pronto! Agora é só arrasar!
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-dark row mt-5">
                    <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                        <img src="https://thiagoprogramando.com.br/nuvem_aircloset/devolva.png">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 text-justify">
                        <h4><b>DEVOLVA</b></h4> <br>
                        <p> Ao término do período de aluguel, o produto deverá ser devolvido na loja em que foi retirado na data prevista do contrato. Caso tenha optado por delivery, a loja parceira recolherá o produto no seu hotel nas datas e horário pré agendados, podendo ser deixado na recepção do hotel para retirada. Passando por um controle de qualidade de higienização após a devolução, estará disponível novamente para a próxima locação. </p>
                    </div>
                </div>

                <div style="background: #EAFFEB;" class="col-sm-12 col-md-12 col-lg-10 offset-lg-1 mt-5 text-dark p-5 row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h4><b>ECONOMIZE & SEJA SUSTENTÁVEL</b></h4> <br><br>
                        <p>Compre apenas o essencial e contribua com o meio ambiente e com o futuro das próximas gerações.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                        <img src="https://thiagoprogramando.com.br/nuvem_aircloset/economize-sustentavel.png">
                    </div>
                </div>

            </div>
        </div>

        <!-- divisão -->
        <div class="m-5 row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <hr class="w-100">
            </div>
        </div>

        <!-- Carrosel -->
        <h2 class="text-center mb-5">Produtos e serviços que você encontra na <b>AirCloset</b></h2>
        <div id="carouselExampleControls" class="carousel slide container mb-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1000/300" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-dark p-1 text-white">First slide label</h3>
                        <p class="bg-dark p-1 text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1000/300" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-dark p-1 text-white">First slide label</h3>
                        <p class="bg-dark p-1 text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1000/300" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-dark p-1 text-white">First slide label</h3>
                        <p class="bg-dark p-1 text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
        </div>

        <!-- Em Breve -->
        <div class="container mb-5">
            <div class="row">
                <div style="min-height: 300px;" class="col-sm-12 col-md-3 col-lg-3">
                    <div style="background: url(https://viagemeturismo.abril.com.br/wp-content/uploads/2017/12/istock-842960000.jpg) no-repeat; background-size: cover;" class="card text-center h-100 d-flex justify-content-center">
                        <h5 class="text-white bg-dark p-1">SÃO PAULO - SP</h5>
                    </div>
                </div>
                <div style="min-height: 300px;" class="col-sm-12 col-md-3 col-lg-3">
                    <div style="background: url(https://dsdsuzy1jtjfw.cloudfront.net/wp-content/uploads/2020/07/Hot-Beach-Ol%C3%ADmpia_02-1200x656.jpeg) no-repeat; background-size: cover;" class="card text-center h-100 d-flex justify-content-center">
                        <h5 class="text-white bg-dark p-1">OLÍMPIA - SP</h5>
                    </div>
                </div>
                <div style="min-height: 300px;" class="col-sm-12 col-md-3 col-lg-3">
                    <div style="background: url(https://a.travel-assets.com/findyours-php/viewfinder/images/res70/77000/77780-Porto-Alegre-And-Vicinity.jpg) no-repeat; background-size: cover;" class="card text-center h-100 d-flex justify-content-center">
                        <h5 class="text-white bg-dark p-1">PORTO ALEGRE - RS</h5>
                    </div>
                </div>
                <div style="min-height: 300px;" class="col-sm-12 col-md-3 col-lg-3">
                    <div style="background: url(https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_1280,h_720/https://www.goiania.go.gov.br/wp-content/uploads/2019/12/12.20.19GOIANIA_abrefecha.jpg) no-repeat; background-size: cover;" class="card text-center h-100 d-flex justify-content-center">
                        <h5 class="text-white bg-dark p-1">GOIÂNIA - GO</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-white">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-2">
                        <h1 class="font-weight-bold mt-5 pt-2 logotitulo mobile-hide">AirCloset</h1>
                        <h1 class="font-weight-bold mt-2 pt-2 text-center mb-2 d-lg-none">AirCloset</h1>
                    </div>

                    <div class="col-md-3">
                        <h4 class="font-weight-bold mb-3">Sobre</h4><hr>
                        <p>Como alugar</p>
                        <p>Seja um franqueado</p>
                        <p>Contato</p>
                    </div>

                    <div class="col-md-3">
                        <h4 class="font-weight-bold mb-3">Siga-nos</h4><hr>
                        <p>Facebook</p>
                        <p>Instagram</p>
                        <p>WhatsApp</p>
                    </div>

                    <div class="col-md-3">
                        <h4 class="font-weight-bold mb-3">Termos</h4><hr>
                        <p>Termos de uso</p>
                        <p>Termos de privacidade</p>
                        <p>Mapa do site</p>
                    </div>

                    <div class="col-md-1">
                        <img src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png" width="100px">
                        <h4 class="font-weight-bold" style="margin-top: 200px;">AirCloset</h4>
                    </div>

                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <script src="{{asset('js/jquery.mask.min.js') }}"></script>
        <script>
            var nav = document.querySelector('nav');

            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 100) {
                    $('#nav').addClass('bg-dark');
                } else {
                    $('#nav').removeClass('bg-dark');
                }
            });
            const rndInt = Math.floor(Math.random() * 4) + 1
            var url = "https://thiagoprogramando.com.br/nuvem_aircloset/background/" + rndInt + '.jpg';
            var div = document.getElementById("principal");
            div.style.backgroundImage = `url(${url})`;
        </script>
    </body>
</html>

