<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
protected $table = 'emprestimos';
protected $fillable = ['id_usuario', 'id_livro', 'data_emprestimo', 'data_evolucao'];

}