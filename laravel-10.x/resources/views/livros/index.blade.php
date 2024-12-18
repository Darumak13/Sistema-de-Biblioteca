<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="c:/xampp/htdocs/Laravel 10/laravel-10.x/resources/js/bootstrap">

<h1 class="h2 p-3 mb-2 bg-gradient-white text-info" style="text-align: center;">Lista de Livros</h1>
<table class="table table-striped table-hover">
<thead>
<tr>
<th>Titulo</th>
<th>Autor</th>
<th>Editar</th>
<th>Remover</th>
</tr>
</thead>
@foreach($livros as $livro)
<tr>
<td>{{ $livro->titulo }}</td> 
<td>{{ $livro->autor->nome}}</td>
<td><a href="/livros/cadastro/{{ $livro->id }}">Editar</a></td>
<td><a href="/livros/remover/{{ $livro->id }}">Remover</a></td>
</tr>
@endforeach
</table>