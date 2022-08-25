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
                    <img style="width:100%;" src="{{ $produto->thumb }}" />
                </div>
                <div class="col-md-4">
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
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
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
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="font-size: 1.5em;">
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>ALUGUE</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-muted">4 (diárias) x <span style="font-size: 1em; color:black;"><b>R$ 75,00</b></span></label>
                                </div>
                                <div class="col-md-12 text-center">
                                    <label>Total <span style="positon:absolute; margin:auto; top:0; right:0; font-size: 0.5em;"><i class="fas fa-question"></i></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h1 class="title-produto">{{ $produto->nome }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection