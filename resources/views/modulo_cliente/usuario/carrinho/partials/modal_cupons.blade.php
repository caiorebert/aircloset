<div class="modal fade" id="modalCupons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Meus Cupons</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-cover">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($cupons as $cupom)
                        <div class="row">
                            <div class="col-md-12">
                              <table style="width:100%;">
                                <tr>
                                  <td>
                                    <h4>
                                      {{ $cupom->nome }}
                                    </h4>
                                    <label style="font-size: 0.9em">Expira em: {{ $cupom->data_validade }}</label>
                                  </td>
                                  <td style="text-align: right;">
                                    <button id="adicionaCupom" class="btn btn-primary-aircloset" data-id="{{ $cupom->id }}">
                                      Aplicar Cupom <i class="fas fa-plus"></i>
                                    </button>
                                  </td>
                                </tr>
                              </table>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
