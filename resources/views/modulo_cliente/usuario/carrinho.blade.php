@extends('layout.main')
@section('title')
    Meu carrinho
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 p-5">
            <h2>MEU CARRINHO</h2>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 pl-5">
            <h6 ><i class="fas fa-arrow-left"></i> Selecione mais produtos</h6>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-4">
        <div class="col-md-1"></div>
        <div class="col-md-6 pl-5">
            <h6><i class="fas fa-shopping-cart"></i> Produtos no carrinho</h6>
            <hr>
            <div class="produtos">
                <!-- foreach($produtos as $produto) -->
                <div class="row produto">
                    <div class="col-md-2 img-produto">
                        <img width="100%" src="https://meiaria.com.br/wp-content/uploads/2021/06/produto-teste.png"/>
                    </div>
                    <div class="col-md-6 descricao-produto">
                        <h4>07 - BRANCO COM PELO LONGO 48 - 50 GG</h4>
                        <label>Tamanho GG</label><br>
                        <label>1 diárias</label><br>
                        <label>(data - hora até data - hora)</label><br>
                        <label>Valor - ($VALOR)</label><br>
                    </div>
                    <div class="col-md-4 valores-produto">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9">
                                <b>
                                    <$VALOR> x <$DIARIAS>
                                </b>
                            </div>
                            <div class="col-md-3">
                                <$TOTAL>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9">
                                <b>
                                    Taxa de limpeza
                                </b>
                            </div>
                            <div class="col-md-3">
                                <$TAXA>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9">
                                <b>
                                    Total
                                </b>
                            </div>
                            <div class="col-md-3">
                                <$TOTAL>
                            </div>
                        </div>
                        <div class="row text-right pt-3">
                            <div class="col-md-12">
                                <button class="btn btn-danger"><i class="fas fa-trash"></i> Excluir</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row produto">
                    <div class="col-md-2 img-produto">
                        <img width="100%" src="https://meiaria.com.br/wp-content/uploads/2021/06/produto-teste.png"/>
                    </div>
                    <div class="col-md-6 descricao-produto">
                        <h4>07 - BRANCO COM PELO LONGO 48 - 50 GG</h4>
                        <label>Tamanho GG</label><br>
                        <label>1 diárias</label><br>
                        <label>(data - hora até data - hora)</label><br>
                        <label>Valor - ($VALOR)</label><br>
                    </div>
                    <div class="col-md-4 valores-produto">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9">
                                <b>
                                    <$VALOR> x <$DIARIAS>
                                </b>
                            </div>
                            <div class="col-md-3">
                                <$TOTAL>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9">
                                <b>
                                    Taxa de limpeza
                                </b>
                            </div>
                            <div class="col-md-3">
                                <$TAXA>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9">
                                <b>
                                    Total
                                </b>
                            </div>
                            <div class="col-md-3">
                                <$TOTAL>
                            </div>
                        </div>
                        <div class="row text-right pt-3">
                            <div class="col-md-12">
                                <button class="btn btn-danger"><i class="fas fa-trash"></i> Excluir</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- endforeach -->
            </div>
        </div>
         <div class="col-md-3 ml-5">
            <h6>Resumo do pedido</h6>
            <hr>
            <div class="row">
                <div class="col-md-10">
                    <h6>Taxa de higienização</h6>
                </div>
                <div class="col-md-2">
                    <h6>($valor)</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <label>
                        Total
                    </label>
                </div>
                <div class="col-md-5 text-right">
                    <label>
                        ($valor)
                    </label>
                    <br>
                    <label>
                        em até 3x de R$ 30,00
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-lg btn-outline-primary" style="width:100%;">
                        Escolher mais produtos
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <a class="btn btn-lg btn-primary" style="width:100%;">
                        Continuar
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <a class="btn btn-sm btn-outline-primary" style="width:100%;">
                        Você ainda não será cobrado
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <p style="text-align:justify;">
                        Alugando com a AirCloset, você concorda em não utilizar perfume diretamente nas peças. O descumprimento dessa cláusula acarretará no pagamento da taxa extra de limpeza correspondente a R$50 reais, assim como sujeiras excessivas. Também será cobrado diárias extras caso você ultrapasse 2h de tolerância a partir do horário de entrega e devolução especificado no ato da sua reserva e no voucher enviado via e-mail após finalização do pagamento. No caso de delivery, é preciso deixar na recepção até no máximo 9h da manhã na sua data de devolução. Caso contrário, também será cobrado uma diária extra. Leia o contrato aqui.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection
