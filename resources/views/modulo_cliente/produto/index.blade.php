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
                                <li class="mini-foto selected" data-url="{{ $produto->thumb  }}" style="background-image: url('{{ $produto->thumb  }}');"></li>
                                <li class="mini-foto" data-url="{{ $produto->thumb  }}" style="background-image: url('{{ $produto->thumb  }}');"></li>
                                <li class="mini-foto" data-url="{{ $produto->thumb  }}" style="background-image: url('{{ $produto->thumb  }}');"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="title-produto">{{ $produto->nome }}</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>TAMANHO</h6>
                        </div>
                        <div class="col-md-12">
                            <select class="form-control">
                                <option>Selecione um tamanho</option>
                                <option>1</option>
                                <option>1</option>
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
                            <input class="form-control" type="date" name="receberin" id="receberin">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="date" name="devolverin" id="devolverin">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control" name="hora_retirada" id="hora_retirada">
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
                                <select class="form-control" name="hora_devolucao" id="hora_devolucao">
                                    <option>07:30</option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                </select>
                                <div class="input-group-text"><i class="fas fa-clock"></i></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="font-size: 1.5em;">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <div class="row  text-center">
                                <div class="col-md-12">
                                    <label>ALUGUE</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-muted">4 (diárias) x <span style="font-size: 1em; color:black;"><b>R$ 75,00</b></span></label>
                                </div>
                                <div class="col-md-12">
                                    <label>Total <span style="positon:absolute; margin:auto; top:0; right:0; font-size: 0.5em;"><i class="fas fa-question"></i></span></label><br>
                                    <label><b>R$ 235,00</b></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 text-center">
                            <button class="btn btn-primary2">RESERVAR</button>
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
                                        07 - BRANCO COM PELO LONGO 48-50 GG
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <h6>Descrição do Produto:</h6>
                                    <label>
                                        Longo e classudo, o look leve com detalhes na gola faz toda a diferença. Possui bolsos laterais com lapelas embutidos na parte frontal da peça. Comprimento longo e fechamento frontal por botões. Acompanha cinto e gola reversível de pelo sintético. Medidas: Ombro: 46 cm, busto: 59 cm, comprimento: 84 cm, braço: 65 cm.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="avaliacoes" role="tabpanel" aria-labelledby="avaliacoes-tab">
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <h3>AVALIAÇÕES</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
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
        });
    </script>
@endsection