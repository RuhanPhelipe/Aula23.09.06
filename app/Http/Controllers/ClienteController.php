<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller {
    
    
    public $clientes = [[
        "id" => 1,
        "nome" => "Gil Eduardo",
        "email" => "gil@gmail.com"
    ]];

    public function __construct() {
        
        $aux = session('clientes');

        if(!isset($aux)) {
            session(['clientes' => $this->clientes]);
        }
    }
    
    public function index() {
        
        $data = session('clientes');
        $clinica = "VetClin DWII";

        // Passa um array "data" com os "clientes" e a string "clínicas"
        return view('clientes.index', compact(['data', 'clinica']));
        // return view('cliente.index')->with('data', $data)->with('clinica', $clinica);
    }

    public function create() {

        return view('clientes.create');
    }

   public function store(Request $request) {
        
        $aux = session('clientes');
        $ids = array_column($aux, 'id');

        if(count($ids) > 0) {
            $new_id = max($ids) + 1;
        }
        else {
            $new_id = 1;   
        }

        $novo = [
            "id" => $new_id,
            "nome" => $request->nome,
            "email" => $request->email
        ];

        array_push($aux, $novo);
        session(['clientes' => $aux]);

        return redirect()->route('clientes.index');
    }

    public function show($id) {
        
        $aux = session('clientes');
        
        $index = array_search($id, array_column($aux, 'id'));

        $data = $aux[$index];

        return view('clientes.show', compact('data'));
    }

    public function edit($id) {

        $aux = session('clientes');
            
        $index = array_search($id, array_column($aux, 'id'));

        $data = $aux[$index];    

        return view('clientes.edit', compact('data'));        
    }

    public function update(Request $request, $id) {
        
        $aux = session('clientes');
        
        $index = array_search($id, array_column($aux, 'id'));

        $novo = [
            "id" => $id,
            "nome" => $request->nome,
            "email" => $request->email,
        ];

        $aux[$index] = $novo;
        session(['clientes' => $aux]);

        return redirect()->route('clientes.index');
    }

    public function destroy($id) {
        $aux = session('clientes');
        
        $index = array_search($id, array_column($aux, 'id')); 

        unset($aux[$index]);

        session(['clientes' => $aux]);

        return redirect()->route('clientes.index');
    }
}
