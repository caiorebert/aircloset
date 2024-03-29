<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-cover">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <img class="img-fluid" src="https://www.aircloset.com.br/assets/img/logo-branca-sg-new.png" width="20%"/>
            </div>
            <form class="p-2" action="{{ route('logar') }}" method="post">
            @csrf
                <div class="col-sm-12 col-md-12 col-lg-12 p-3 container">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-12 input-group mb-5">
                            <button type="submit" class="btn btn-outline-primary btn-block">Acessa com o Facebook</button>
                            <button type="submit" class="btn btn-outline-danger btn-block">Acessa com o Google</button>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 input-group mb-1">
                            <input class="form-control" type="text" name="login" placeholder="Email"/>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 input-group mt-1">
                            <input class="form-control" type="password" name="password" placeholder="Senha"/>
                            @if ($errors->any())
                                @if ($errors->get('error_login_msg'))
                                <label class="text-danger">Login ou senha incorretos</label>
                                @endif
                            @endif
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 input-group mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary btn-lg">ENTRAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>
