<div class="row produto">
    <div class="col-md-2 img-produto">
        <img width="100%" src="{{ $produto->thumb }}"/>
    </div>
    <div class="col-md-6 descricao-produto">
        <h4>{{ $produto->nome }}</h4>
        <label>Tamanho {{ $produto->tamanho }}</label><br>
        <label>{{ $produto->diarias }} diárias</label><br>
        <label>({{ $produto->checkin_formatado }} - {{ $produto->horain_formatado }} até {{ $produto->checkout_formatado }} - {{ $produto->horaout_formatado }})</label><br>
        <label>Valor - (R$ {{ number_format($produto->valorpordiaria, 2, ',', '.') }}/diária)</label><br>
    </div>
    <div class="col-md-4 valores-produto">
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <b>
                    R$ {{ number_format($produto->valorpordiaria, 2, ',', '.') }}
                </b>
                <label>
                    x
                </label>
                <b>
                    R$ {{ number_format($produto->diarias, 2, ',', '.') }}
                </b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12" style="text-align:right;">
                <label>
                    <b>
                        Total:
                    </b> 
                    R$ {{ number_format($produto->valortotal, 2, ',', '.') }}
                </label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                <b>
                    Taxa de limpeza:
                </b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                R$ {{ number_format($produto->taxalimpeza, 2, ',', '.') }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                <b>
                    Total:
                </b>
                <label>
                    R$ {{ number_format($produto->valortotal + $produto->taxalimpeza, 2, ',', '.') }}
                </label>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row text-right pt-3">
            <div class="col-md-12">
                <button class="btn btn-danger remove-produto" id="{{ $produto->produtocarrinhoid }}"><i class="fas fa-trash"></i> Excluir</button>
            </div>
        </div>
    </div>
</div>