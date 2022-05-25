<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurements;

class MeasurementsController extends Controller
{
    //
    public function store(Request $request){
        //criando o objeto Medidas
        $measurements = new Measurements();

        //alterando os atributos do objeto
        $measurements = $request->all();

        //encaminhando para salvar no banco de dados
        $measurements->save();
    }
}
