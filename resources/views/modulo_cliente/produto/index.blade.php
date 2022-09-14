@extends('layout.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/produto.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11 anuncio-produto">
            <br>
            <div class="row">
                <div class="col-md-3">
                    <img class="thumb-principal" style="width:100%;" src="{{ $produto->thumb }}" />
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="mini-fotos">
                                <li class="mini-foto" data-url="{{ $produto->thumb }}" style="background-image: url('{{ $produto->thumb  }}');"></li>
                                @foreach($fotos as $foto)
                                    <li class="mini-foto" data-url="{{ $foto->url  }}" style="background-image: url('{{ $foto->url  }}');"></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <form id="form-informs">
                        <h3 class="title-produto">{{ $produto->nome }}</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>TAMANHO</h6>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control tamanhos">
                                    <option value="">Selecione um tamanho</option>
                                    @foreach($tamanhos as $tamanho)
                                        <option value="{{ $tamanho->id }}">{{ $tamanho->tamanho }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row p-2 text-justify">
                            <div class="col-md-12">
                                <label>Selecione um tamanho para desbloquear as datas de retirada e devolução...</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control inputs-to-disable datas-horas" disabled="true" type="date" name="receberin" id="receberin">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control inputs-to-disable datas-horas" disabled="true" type="date" name="devolverin" id="devolverin">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control inputs-to-disable datas-horas" disabled="true" name="hora_retirada" id="hora_retirada">
                                        <option>07:30</option>
                                        <option>08:00</option>
                                        <option>08:30</option>
                                        <option>09:00</option>
                                    </select>
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control inputs-to-disable datas-horas" disabled="true" name="hora_devolucao" id="hora_devolucao">
                                        <option>07:30</option>
                                        <option>08:00</option>
                                        <option>08:30</option>
                                        <option>09:00</option>
                                    </select>
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="row" style="font-size: 1.5em;">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <div class="row  text-center">
                                <div class="col-md-12">
                                    <label>ALUGUE</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-muted" id="txtDiarias">4 (diárias) x </label>
                                    <label>
                                        <b id="txtValorDiarias">R$ {{ number_format($produto->valor_diaria, 2, ',', '.'); }}</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label>Total <span style="positon:absolute; margin:auto; top:0; right:0; font-size: 0.5em;"><i class="fas fa-question"></i></span></label><br>
                                    <label><b id="txtValorTotal">R$ {{ number_format($produto->valor_diaria * 4, 2, ',', '.'); }}</b></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 text-center">
                            @if(Auth::check())
                                <a class="btn btn-primary-aircloset" id="adiciona-carrinho" data-id="{{ $produto->id }}">RESERVAR</a>
                            @else
                                <a class="btn btn-primary-aircloset" href="{{ route('login') }}">RESERVAR</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h4><i class="fas fa-location-dot"></i> ONDE ESTÁ MEU PRODUTO</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9833.724144348766!2d-50.88019577710966!3d-29.377710480063467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519338468550447%3A0x563211d1c4741b2f!2sAirCloset%20-%20Aluguel%20de%20casacos%20e%20itens%20de%20viagem%20em%20Gramado!5e0!3m2!1spt-BR!2sbr!4v1661614141506!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="perfil-vendedor">
                                <table>
                                    <tr>
                                        <td style="width:30%">
                                            <img src="https://api.aircloset.com.br/produto/verImagem/32880d43f69941cf0427907e174d4cf8c0d1a7f6/50x50"/>
                                        </td>
                                        <td style="width:50%">
                                            <h6>
                                                AirCloset - Gramado/RS
                                                Gramado - RS
                                            </h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="detalh4s-tab" data-bs-toggle="tab" data-bs-target="#detalhes" type="button" role="tab" aria-controls="detalhes" aria-selected="true">Detalhes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="avaliacoes-tab" data-bs-toggle="tab" data-bs-target="#avaliacoes" type="button" role="tab" aria-controls="avaliacoes" aria-selected="false">Avaliações</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="detalhes" role="tabpanel" aria-labelledby="detalhes-tab">
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <h3>DETALHES</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Nome do Produto:</h6>
                                    <label>
                                        {{ $produto->nome }}
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <h6>Descrição do Produto:</h6>
                                    <label>
                                        {{ $produto->descricao }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="avaliacoes" role="tabpanel" aria-labelledby="avaliacoes-tab">
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <h3>AVALIAÇÕES</h3>
                                    <hr style="background-color:black; width:100%;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 avaliacoes">
                                    @foreach($comentarios as $comentario)
                                        <div class="row">
                                            <div class="col-md-12 avaliacao">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <b>
                                                                    {{ $comentario->nome }}
                                                                </b>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label style="font-size: 0.8em;" class="text-muted">
                                                                {{ $comentario->created_at }}
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p>
                                                                {{ $comentario->comentario }}
                                                            </p>
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
        </div>
    </div>
    <div class="alerts">
        <div class="row">
            <div class="col-md-12">
                <div id="success" class="alert alert-primary alert-dismissible fade" role="alert">
                    <label id="text"><strong>Produto adicionado!</strong> <a href="{{ route('carrinho') }}">Clique aqui para ir até o carrinho</a></label>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div id="error" class="alert alert-danger alert-dismissible fade" role="alert">
                    <label id="text"><strong>Erro ao adicionar produto!</strong> Tente novamente mais tarde.</label>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function(){

            
            $(".mini-foto").click(function(){
                $(this).addClass('selected');
                $(this).siblings('.mini-foto').removeClass('selected');
                $(".thumb-principal").attr('src', $(this).attr('data-url'));
            });

            $(".tamanhos").click(function(){
                if ($(this).val()!="") {
                    $(".inputs-to-disable").attr('disabled', false);
                } else {
                    $(".inputs-to-disable").attr('disabled', true);
                }
            });

            $(".datas-horas").change(function(){
                let inputs = $("#form-informs").serializeArray();
                if (inputs.length > 0) {
                    if (inputs[0].value != "" && inputs[1].value != "") {
                        $.post("{{ route('calcula_valor_diarias') }}", { '_token': '{{ csrf_token() }}', 'id': '{{ $produto->id }}', 'values' : inputs }, function(response){
                            $("#txtDiarias").html(`${response.diarias} (diárias) x `);
                            $("#txtValorDiarias").html(`R$ ${response.valor_diaria}`);
                            $("#txtValorTotal").html(`R$ ${response.valortotal}`);
                        });
                    }
                }
            });

            $("#adiciona-carrinho").click(function(){
                let inputs = $("#form-informs").serializeArray();
                var id = $(this).attr("data-id");
                var tamanho = $(".tamanhos").val();
                $.post("{{ route('adiciona-produto') }}", { '_token': '{{ csrf_token() }}', 'id' : id, 'tamanho': tamanho, 'values':inputs }, function(response){
                    if (response.status) {
                        $("#success #text").html(response.data);
                        $("#success").addClass("show");
                    } else if (response.status==false){
                        alert(2);
                        $("#error #text").html(response.data);
                        $("#error").addClass("show");
                    } else if (response.message == "Unauthenticated.") {
                        alert(1);
                        window.location.href="{{route('login')}}";
                    }
                    return true;
                });
                console.log(1);
            });
        });
    </script>
@endsection