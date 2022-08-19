<table>
    <tr>
        <td colspan="3">
            <h1>Mensagem recebida!</h1>
        </td>
    </tr>
    <tr>
        <td>
            <h3><b>Nome:</b> {{ $mensagem->nome }}</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3><b>Email:</b> {{ $mensagem->email }}</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3><b>Telefone:</b> {{ $mensagem->telefone }}</h3>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>{{ $mensagem->mensagem }}</p>
        </td>
    </tr>
</table>