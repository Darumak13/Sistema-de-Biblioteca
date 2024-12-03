Formulario de cadastro

<form action="/usuarios/salvar" method="post">
    @csrf
    Nome: <input type="text" name="nome" required value="{{@$resultado->nome}}"><br>
    E-mail: <input type="email" name="email" required value="{{@$resultado->email}}"><br>
    Senha: <input type="password" name="senha" required><br>
    <input name="id" type="hidden" value="{{@$resultado->id}}">
    <input type="submit">
</form>