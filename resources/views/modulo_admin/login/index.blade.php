<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container" style="max-width: 99vw; padding:0px; margin:0px;">
        <div class="row">
            <div class="col-md-7 bg-dark"  style="height: 100vh;">
                <img src=""/>
            </div>
            <div class="col-md-5" style="position: relative;">
                <div class="div-form">
                    <form class="form">
                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                <h3 class="bg-primary-aircloset text-white p-2">Admin - AirCloset</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input class="form-control" placeholder="Login" type="text" name="login" id="">
                                    @if ($errors->any())
                                        @if($errors->get('login'))
                                            <label class="text-danger text-center" style="width:100%;"><?=$errors->get('login')[0] ?></label>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    <input class="form-control" placeholder="Senha" type="password" name="senha" id="">
                                    @if ($errors->any())
                                        @if ($errors->get('password'))
                                            <label class="text-danger text-center" style="width:100%;"><?=$errors->get('password')[0] ?></label>
                                        @endif
                                        @if ($errors->get('error_login_msg'))
                                            <label class="text-danger text-center" style="width:100%;"><?=$errors->get('error_login_msg')[0] ?></label>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-outline-primary-aircloset">ENTRAR</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a class="nav-link" href="">Esqueceu sua senha?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>