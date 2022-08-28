@extends('layout.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }} ">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
    
            </div>
            <div class="col-md-7">
                <h1>Listagem de Produtos</h1>
            </div>
        </div>
        <hr>
        <div class="row p-3">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 text-right">
                <select class="form-control filtro-ordenacao" style="width:20%;">
                    <option>Ordenar por</option>
                    <option>Mais relevantes</option>
                    <option>Novidades</option>
                    <option>Mais baratos</option>
                    <option>Mais caros</option>
                    <option>Populares</option>
                </select>
            </div>
            <div class="col-lg-1"></div>
        </div>  
        <div class="row">
            <div class="col-md-1">
            </div>  
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Filtros</h6>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary-aircloset">LIMPAR FILTROS</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>
                            Preços
                        </h6>                            
                    </div>
                    <div class="col-md-12">
                        <table>
                            <tr>
                                <td class="text-left">
                                    R${{ $min }}
                                </td>
                                <td class="text-right">
                                    R${{ $max }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="range">
                                        <input type="range" class="form-range" min="{{ $min }}" value="{{ $max }}" max="{{ $max }}" step="5" id="rangePrecos">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="preco_atual">

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>
                            Departamentos
                        </h6>
                        <ul style="list-style:none; padding-inline-start:0px;">
                            <li>
                                <input type="checkbox" name="dep-masculino" id="dep-masculino">
                                <label for="dep-masculino">
                                    Masculino
                                </label> 
                            </li>
                            <li>
                                <input type="checkbox" name="dep-feminino" id="dep-feminino">
                                <label for="dep-feminino">
                                    Feminino 
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="dep-infantil" id="dep-infantil">
                                <label for="dep-infantil">
                                    Infantil 
                                </label> 
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Lojas</h6>
                        <ul style="list-style:none; padding-inline-start:0px;">
                            <li>
                                <input type="checkbox" name="loja" id="loja">
                                <label for="loja">
                                    AirCloset - Gramado/RS
                                </label> 
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Categoria</h6>
                        <ul style="list-style:none; padding-inline-start:0px;">
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                    Casacos
                                </label> 
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                    Guarda- chuva
                                </label> 
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                    Botas e Sapatos
                                </label> 
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                    Itens de viagem
                                </label> 
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                    Vestidos e Saias
                                </label> 
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Comprimento</h6>
                        <ul style="list-style:none; padding-inline-start:0px;">
                            <li>
                                <input type="checkbox" />
                                <label>Longuíssimo</label>
                            </li>    
                            <li>
                                <input type="checkbox" />
                                <label>Curto</label>
                            </li>  
                            <li>
                                <input type="checkbox" />
                                <label>Médio</label>
                            </li>  
                            <li>
                                <input type="checkbox" />
                                <label>Longo</label>
                            </li>  
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Tecido</h6>
                        <ul style="list-style:none; padding-inline-start:0px;">
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Matelasse
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Poliéster
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Sarja forrado
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Pelo
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Camurça
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Veludo
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            PVC
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Nylon
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Lã Sintética
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Algodão
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Couro
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Lã
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Malha
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Denim
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label>
                            Viscose
                            </label>
                        </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Cor</h6>
                        <ul style="list-style:none; padding-inline-start:0px;">
                            <li>
                                <input type="checkbox"/>
                                <label>Laranja</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Pink</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Rosa</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Azul Royal</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Azul Marinho</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Bege</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Areia</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Telha</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Poá</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Chumbo</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Verde</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Lilás</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Xadrez</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Dourado</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Rose</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Preto</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Cinza</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Branco</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Marrom</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Caramelo</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Amarelo</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Vermelho</label>
                            </li>
                            <li>
                                <input type="checkbox"/>
                                <label>Azul</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
            <div class="col-md-9">
                <ul style="list-style:none;">
                @foreach($produtos as $produto)
                    <li class="produto">
                        <a href="{{ route('produto', $produto->id) }}" >
                            <div class="produto-img">
                                <img src="{{ $produto->thumb }}"/>
                            </div>
                            <div class="produto-descricao">
                                <table style="width:100%; text-align:center;">
                                    <tr>
                                        <td>
                                            <h6 class="mt-3">
                                                {{ $produto->nome }}
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            R$ {{ $produto->valor_diaria }} a diária
                                        </td>
                                    </tr>
                                </table>    
                            </div>
                        </a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(function(){
            var filtros = {};
            $(".filtro-ordenacao").change(function(){
                var ordem = $(this).val();
                filtros.push(ordem: ordem);
                $.post("route('search')", { filtros: filtros }, function(response){

                });
            });
        });
    </script>
@endsection