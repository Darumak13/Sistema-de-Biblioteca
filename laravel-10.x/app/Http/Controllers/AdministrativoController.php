<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AdministrativoController extends Controller

{
    
    public function index()

    {
        return view('index');

    }

}
