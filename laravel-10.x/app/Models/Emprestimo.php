<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Livro;

class Emprestimo extends Model
{
protected $table = 'emprestimos';
public $timestamps = false;

    public function livro()
    {
        return $this->hasOne(Livro::class,'id','id_livro');
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class,'id','id_usuario');
    }


}