Formulario de cadastro

<form action="/autores/salvar" method="post">
    @csrf
    Nome: <input type="text" name="nome" required value="{{@$resultado->nome}}"><br>
    <input name="id" type="hidden" value="{{@$resultado->id}}">
    <input type="submit">
</form>