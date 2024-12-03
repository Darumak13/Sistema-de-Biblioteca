<h1>Lista de Usuários</h1>
<table>
<tr>
<th>Nome</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($autores as $autor)
<tr>
<td>{{ $autor->nome }}</td> 
<td><a href="/autores/cadastro/{{ $autor->id }}">Editar</a></td>
<td><a href="/autores/remover/{{ $autor->id }}">Remover</a></td>
</tr>
@endforeach
</table>