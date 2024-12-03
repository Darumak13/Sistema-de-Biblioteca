<h1>Lista de Usuários</h1>
<table>
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