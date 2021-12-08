<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CarroController extends Controller{


    public function listaCarros(){

      
            $carros = DB::select('select * from carros');

            return view('carros_disponiveis')->with('carros', $carros);
           
}


    public function mostra_detalhe(){


        return view('detalhe');


    }


}


