@extends('layout.main')
@section('title')
    Atualizar dados
@endsection
@section('css')
<style type="text/css">
    .title {
        color: #5b5855;
    }
</style>
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="title p-5">ATUALIZAR DADOS</h2>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="dados-tab" data-bs-toggle="tab" data-bs-target="#dados" type="button" role="tab" aria-controls="dados" aria-selected="true">Meus Dados</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="enderecos-tab" data-bs-toggle="tab" data-bs-target="#enderecos" type="button" role="tab" aria-controls="enderecos" aria-selected="false">Meus Endereços</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pedidos-tab" data-bs-toggle="tab" data-bs-target="#pedidos" type="button" role="tab" aria-controls="pedidos" aria-selected="false">Meus Pedidos</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="dados" role="tabpanel" aria-labelledby="dados-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="p-3">Meus dados</h4>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <h6>Olá {{ explode(" ", $user->nome)[0] }}, altere seus dados:</h6>
                        </div>
                    </div>
                    <form id="form-atualizarDados">
                        @csrf
                        <input type="hidden" name="id" value="{{ (isset($user->id)) ? $user->id : '' }}"/>
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <label>Telefone: <span style="color:red;">*</span></label>
                                <input type="text" name="telefone" id="telefone" value="{{ isset($user->telefone) ? $user->telefone : '' }}" style="width:50%;" class="form-control"/>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <label>Celular: <span style="color:red;">*</span></label>
                                <input type="text" name="celular" id="celular" value="{{ isset($user->celular) ? $user->celular : '' }}" style="width:50%;" class="form-control"/>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <label>Email: <span style="color:red;">*</span></label>
                                <input type="email" readonly="true" name="email" id="email" value="{{ (isset($user->email)) ? $user->email : '' }}" style="width:50%;" class="form-control"/>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <label>CPF: <span style="color:red;">*</span></label>
                                <input type="text" readonly="true" name="cpf" id="cpf" value="{{ (isset($user->cpf)) ? $user->cpf : '' }}" style="width:50%;" class="form-control"/>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-3">
                                <button style="width:100%; font-size: 1em !important;" class="btn btn-lg btn-primary">ALTERAR SENHA</button>
                            </div>
                            <div class="col-md-3">
                                <button id="bt-salvar" style="width:100%; font-size: 1em !important;" class="btn btn-lg btn-outline-primary">SALVAR</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="enderecos" role="tabpanel" aria-labelledby="enderecos-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="p-3">Meus endereços</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="endereços">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <h6><b>Destinatário:</b> pessoa</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6><b>Endereço:</b> rua tal tal tal</h6>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ENDEREÇOS -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="p-3">Meus pedidos</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="endereços">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                               
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- PEDIDOS -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function(){
        $("#cpf").mask("000.000.000-00");
        $("#bt-salvar").click(function(e){
            var valores = $("#form-atualizarDados").serializeArray();
            $(this).html(`CARREGANDO <div class="spinner-border text-primary" role="status"></div>`)
            e.preventDefault();
            $.post("{{ route('updateDados') }}", { _token: valores[0].value, values: valores }, function(response) {
                $("#bt-salvar").text(`SALVAR`);
            });
        });
    });
</script>
@endsection