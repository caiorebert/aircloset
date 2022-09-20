@extends('layout.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }} ">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1"></div>
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
        <div class="row div-toggle-filtros ps-3 mb-3">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <button class="btn btn-primary-aircloset toggleFiltros">FILTROS</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>  
            <div class="col-md-3 div-filtros">
                <div class="row close-filtros">
                    <div class="col-md-12" style="text-align:right;">
                        <button class="btn toggleFiltros">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Filtros</h6>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary-aircloset" style="width:100%;" id="buscar">BUSCAR <i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <button class="btn btn-secondary" style="width:100%;" id="limpa-filtros">LIMPAR FILTROS</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="input-pesquisa form-control" type="text" name="search_ecommerce"
                                placeholder="Busque por produtos, marcas..."/>
                            <span class="input-group-text pt-2" id="basic-addon1"><i class="fa-solid fa-magnifying-glass pt-2"></i></span>
                        </div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <label>Preço mínimo:</label>
                                <div class="input-group">
                                    <span class="input-group-text pt-2">R$</span>
                                    <input class="form-control" type="number" name="min" id="min" value="{{ $min }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Preço máximo:</label>
                                <div class="input-group">
                                    <span class="input-group-text pt-2">R$</span>
                                    <input class="form-control" type="number" name="max" id="max" value="{{ $max }}">
                                </div>
                            </div>
                        </div>
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
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" class="filtros" value="Masculino" data-tipo-filtro="departamento" name="dep-masculino" id="dep-masculino">
                                    <label class="form-check-label" for="dep-masculino">
                                        Masculino
                                    </label> 
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" class="filtros" value="Feminino" data-tipo-filtro="departamento" name="dep-feminino" id="dep-feminino">
                                    <label class="form-check-label" for="dep-feminino">
                                        Feminino 
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" class="filtros" value="Infantil" data-tipo-filtro="departamento" name="dep-infantil" id="dep-infantil">
                                    <label class="form-check-label" for="dep-infantil">
                                        Infantil 
                                    </label> 
                                </div>
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
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" class="filtros" data-tipo-filtro="local" value="Aircloset - Gramado/RS" name="loja" id="loja">
                                    <label class="form-check-label" for="loja">
                                        AirCloset - Gramado/RS
                                    </label> 
                                </div>
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
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" value="Casacos" class="filtros" data-tipo-filtro="categoria" name="" id="">
                                    <label class="form-check-label" for="">
                                        Casacos
                                    </label> 
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" value="Guarda- chuva" class="filtros" data-tipo-filtro="categoria" name="" id="">
                                    <label class="form-check-label" for="">
                                        Guarda- chuva
                                    </label> 
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" value="Botas e Sapatos" class="filtros" data-tipo-filtro="categoria" name="" id="">
                                    <label class="form-check-label" for="">
                                        Botas e Sapatos
                                    </label> 
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" value="Itens de viagem" class="filtros" data-tipo-filtro="categoria" name="" id="">
                                    <label class="form-check-label" for="">
                                        Itens de viagem
                                    </label> 
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" type="checkbox" value="Vestidos e Saias" class="filtros" data-tipo-filtro="categoria" name="" id="">
                                    <label class="form-check-label" for="">
                                        Vestidos e Saias
                                    </label> 
                                </div>
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
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Longuíssimo" type="checkbox" data-tipo-filtro="comprimento" class="filtros" />
                                    <label class="form-check-label">Longuíssimo</label>
                                </div>
                            </li>    
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Curto" type="checkbox" data-tipo-filtro="comprimento" class="filtros" />
                                    <label class="form-check-label">Curto</label>
                                </div>
                            </li>  
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Médio" type="checkbox" data-tipo-filtro="comprimento" class="filtros" />
                                    <label class="form-check-label">Médio</label>
                                </div>
                            </li>  
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Longo" type="checkbox" data-tipo-filtro="comprimento" class="filtros" />
                                    <label class="form-check-label">Longo</label>
                                </div>
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
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Matelasse" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Matelasse
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Poliéster" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Poliéster
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Sarja forrado" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Sarja forrado
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Pelo" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Pelo
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Camurça" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Camurça
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Veludo" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Veludo
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="PVC" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                PVC
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Nylon" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Nylon
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Lã Sintética" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Lã Sintética
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Algodão" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Algodão
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Couro" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Couro
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Lã" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Lã
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Malha" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Malha
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Denim" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Denim
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input filtros" value="Viscose" type="checkbox" data-tipo-filtro="tecido" class="filtros" name="" id="">
                                <label class="form-check-label">
                                Viscose
                                </label>
                            </div>
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
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Laranja" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Laranja</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Pink" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Pink</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Rosa" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Rosa</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Azul Royal" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Azul Royal</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Azul Marinho" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Azul Marinho</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Bege" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Bege</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Areia" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Areia</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Telha" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Telha</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Poá" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Poá</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Chumbo" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Chumbo</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Verde" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Verde</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Lilás" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Lilás</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Xadrez" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Xadrez</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Dourado" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Dourado</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Rose" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Rose</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Preto" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Preto</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Cinza" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Cinza</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Branco" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Branco</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Marrom" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Marrom</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Caramelo" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Caramelo</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Amarelo" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Amarelo</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Vermelho" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Vermelho</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input filtros" value="Azul" data-tipo-filtro="cor" type="checkbox" class="filtros"/>
                                    <label class="form-check-label">Azul</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
            <div class="col-md-8">
                <ul class="produtos" style="list-style:none; text-align:center;">
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
                                            R${{ number_format($produto->valor_diaria, 2, ',', '.') }} a diária
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
        function adicionaToListFiltros(){

        }
        function busca(objFiltros){
            $(".produtos").html(`
                <div class="spinner-border text-primary-aircloset" role="status">
                    <span class="sr-only">Carregando...</span>
                </div>
            `);
            $.post("{{ route('search') }}", { '_token': '{{ csrf_token() }}', 'objFiltros' : objFiltros }, function(response){
                $(".produtos").html(response);
            });
        }
        $(function(){
            var objFiltros = {
                search: "",
                ordenacao: "",
                filtros: [
                    {
                        name: 'preco_max',
                        value: $("#max").val()
                    },
                    {
                        name: 'preco_min',
                        value: $("#min").val()
                    }
                ]
            };
            $("#buscar").click(function(){
                $(".div-filtros").removeClass('expanded');
                objFiltros.search = $("input[name='search_ecommerce']").val();
                objFiltros.filtros[0].value = $("#max").val();
                objFiltros.filtros[1].value = $("#min").val();
                busca(objFiltros);
            });
            $(".filtro-ordenacao").change(function(){
                var ordem = $(this).val();
                objFiltros.search = $(this).val();
            });
            $(".filtros").change(function(){
                var obj = {
                    name: $(this).attr('data-tipo-filtro'),
                    value: $(this).val()
                };
                var existe = false;
                var index = 0;
                for (var i = 2; i < objFiltros.filtros.length; i++) {
                    if (objFiltros.filtros[i].value==obj.value) {
                        existe = true;
                        index = i;
                    }
                }
                if (!existe) {
                    objFiltros.filtros.push(obj);
                } else {
                    objFiltros.filtros.splice(index, index + 1);
                }
            });
            $("#limpa-filtros").click(function(){
                objFiltros.filtros = [];
                $(".filtros").attr("selected", false);
            });
            $(".toggleFiltros").click(function(){
                $(".div-filtros").toggleClass('expanded');
            });
        });
    </script>
@endsection