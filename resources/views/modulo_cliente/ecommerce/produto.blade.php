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