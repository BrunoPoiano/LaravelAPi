<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteContoller extends Controller
{
    public function teste(){
        return response("aqui TESTE DEU CERTO CARAI", 200);
    }
}
