Formulario de cadastro

<form action="/emprestimos/salvar" method="post">
    @csrf
    <select name="id_usuario" id="id_usuario">
        @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
        @endforeach
    </select>
    <select name="id_livro" id="id_livro">
        @foreach($livros as $livro)
        <option value="{{$livro->id}}">{{$livro->titulo}}</option>
        @endforeach
    </select>
    <br>
    <label for="data_emprestimo">Data do Cadastro</label>
    <input type="date" value="{{@$resultado->data_emprestimo}}" name="data_emprestimo" id="data_emprestimo">
    <br>
    <label for="data_devolucao">Data da Devolução</label>
    <input type="date" name="data_devolucao" id="data_devolucao" value="{{@$resultado->data_devolucao}}">
    <input name="id" type="hidden" value="{{@$resultado->id}}">
    <input type="submit">
</form>