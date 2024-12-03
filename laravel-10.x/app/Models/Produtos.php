<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{

    public function nomeProduto(){
        return "O produto se chama ".$this->nome;
    }
}
