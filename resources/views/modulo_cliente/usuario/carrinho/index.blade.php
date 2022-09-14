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
            <h6><a href="{{ route('search') }}"><i class="fas fa-arrow-left"></i> Selecione mais produtos</a></h6>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-4">
        <div class="col-md-1"></div>
        <div class="col-md-6 pl-5">
            <h6><i class="fas fa-shopping-cart"></i> Produtos no carrinho</h6>
            <hr>
            <div class="produtos">
                @foreach($produtos as $produto)
                    @include('modulo_cliente.usuario.carrinho.partials.produtocarrinho', $produto)
                @endforeach
            </div>
        </div>
         <div class="col-md-4 ml-5">
            <h6>Resumo do pedido</h6>
            <hr>
            <div class="row">
                @if($carrinho->cupom_id)
                <div class="col-md-12">
                    <h6>Cupom aplicado:</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <table style="width:100%">
                                <tr>
                                    <td>
                                        <label>{{ $carrinho->cupom_nome }}</label>
                                    </td>
                                    <td style="text-align: right;">
                                        <button class="btn btn-danger" id="removeCupom"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
                @else
                <div class="col-md-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary-aircloset" data-bs-toggle="modal" data-bs-target="#modalCupons">
                    Meus Cupons <i class="fas fa-ticket"></i>
                    </button>
                    @include('modulo_cliente.usuario.carrinho.partials.modal_cupons', $cupons)
                    <hr>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-9">
                    <h6>Taxa de higienização</h6>
                </div>
                <div class="col-md-3">
                    <h6>(R$ {{ number_format($taxalimpeza, 2, ',', '.') }})</h6>
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
                        (R$ {{ number_format($valortotalcarrinho + $taxalimpeza, 2, ',', '.') }})
                    </label>
                    <br>
                    <label>
                        em até 3x de R$ 30,00
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-lg btn-outline-primary-aircloset" style="width:100%;">
                        Escolher mais produtos
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <a class="btn btn-lg btn-primary-aircloset" style="width:100%;">
                        Continuar
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <a class="btn btn-sm btn-outline-primary-aircloset" style="width:100%;">
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
@section('script')
<script>
    $(function(){
        $(".remove-produto").click(function(){
            var id = $(this).attr("id");
            $.post("{{ route('remove-produto') }}", { '_token' : "{{ csrf_token() }}", 'id' : id }, function(response){
                document.location.reload(true);
            }); 
        });
        $("#removeCupom").click(function(){
            $.post("{{ route('remove-cupom') }}", { '_token' : "{{ csrf_token() }}" }, function(response){
                document.location.reload(true);
            }); 
        });
        $("#adicionaCupom").click(function(){
            $.post("{{ route('aplica-cupom') }}", { '_token' : "{{ csrf_token() }}" }, function(response){
                document.location.reload(true);
            }); 
        });
    });
</script>
@endsection