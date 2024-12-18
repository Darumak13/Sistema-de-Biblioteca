<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h1>Formulario de cadastro</h1>

<form class="row g-3" action="/usuarios/salvar" method="post">
    @csrf
    <div class="col-5">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control"  name="nome" required value="{{@$resultado->nome}}"><br>
    </div>
    <div class="col-md-11">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control"  name="email" required value="{{@$resultado->email}}"><br>
    </div>
    <div class="col-12">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control"  name="senha" required><br>
    <input name="id" type="hidden" value="{{@$resultado->id}}">
    </div>
    <button class="btn btn-primary" type="submit">Submeter</button>
</form>