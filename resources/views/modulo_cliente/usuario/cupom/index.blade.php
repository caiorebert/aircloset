@extends('layout.main')
@section('title')
    Meus Cupons
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <h2 class="mb-5">Meus Cupons</h2>
                    <ul style="list-style:none;">
                        @foreach($cupons as $cupom)
                            <li class="cupom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="padding: 5px; text-align:right;">
                                                    <label class="text-muted">Cupom atribuído no dia: {{ date("d/m/Y", strtotime(explode(" ", $cupom->created_at)[0])) }}</label>
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px; padding-left: 15px;">
                                                    <h6>{{ $cupom->nome }}</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px; text-align:right;">
                                                    <hr>
                                                    <button class="btn btn-sm btn-primary-aircloset">APLICAR</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .cupom {
            width: 30vw;
            border-radius: 5px;
            border: 0.5px solid rgb(209, 209, 209, 0.5);
        }
    </style>
@endsection