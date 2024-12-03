<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Autor;

class Livro extends Model
{
    protected $table = 'livros';
    public $timestamps = false;




    public function autor()
    {
        return $this->hasOne(Autor::class,'id','id_autor');
    }


}