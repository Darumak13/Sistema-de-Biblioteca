<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<h1>Lista de Emprestimos</h1>
<table class="table">
<tr>
<th>Titulo</th>
<th>Usuário</th>
<th>Cadastro</th>
<th>Devolução</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($emprestimos as $empre)
<tr>
<td>{{ $empre->livro->titulo }}</td> 
<td>{{ $empre->usuario->nome}}</td>
<td>{{ $empre->data_emprestimo}}</td>
<td>{{ $empre->data_devolucao}}</td>
<td><a href="/emprestimos/cadastro/{{ $empre->id }}">Editar</a></td>
<td><a href="/emprestimos/remover/{{ $empre->id }}">Remover</a></td>
</tr>
@endforeach
</table>