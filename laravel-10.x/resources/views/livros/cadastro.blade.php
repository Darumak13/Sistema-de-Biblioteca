<form action="/livros/salvar" method="post">
    @csrf
    <label for="titulo">Selecione o titulo do livro</label>
    <input type="text" name="titulo">
    <br>
    <select name="id_autor" id="id_autor">
        @foreach($autores as $aut)
        <option value="{{$aut->id}}">{{$aut->nome}}</option>
        @endforeach
    </select>
    <br>
    <input name="id" type="hidden" value="{{@$resultado->id}}">
    <input type="submit">
</form>