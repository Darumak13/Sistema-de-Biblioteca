Página de Produtos
<br><br>

<table border="1">
    <tr>
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Remover</td>
    </tr>
    @foreach($produtos as $valor)
    <tr>
        <td>{{$valor->nomeProduto()}}</td>
        <td>{{$valor->quantidade}}</td>
        <td><a href='/produtos/remover/{{$valor->id}}'>Remover</a></td>
    </tr>
    @endforeach
</able>
