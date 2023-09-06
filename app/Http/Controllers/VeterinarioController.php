<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeterinarioController extends Controller {
    public $veterinarios = [[
        'id' => 1,
        'CRMV' => 0000,
        'nome' => 'TesteN',
        'especialidade' => 'TesteE',
    ]];

    public function __construct()  {
        
        $aux = session('veterinarios');

        if (!isset($aux)) {
            session(['veterinarios' => $this->veterinarios]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $data = session('veterinarios');
        $clinica = "VetClin DWII";

        return view('veterinarios.index', compact('data', 'clinica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('veterinarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $aux = session('veterinarios');
        $crmvs = array_column($aux, 'CRMV');

        if(count($crmvs) > 0) {
            $new_crmv = max($crmvs) +1;
        }else {
            $new_crmv = 1;
        }

        $new = [
            'CRMV' => $new_crmv,
            'nome' => $request->nome,
            'especialidade' =>  $request->especialidade
        ];

        array_push($aux, $new);

        session(['veterinarios' => $aux]);

        return redirect()->route('veterinarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $crmv
     * @return \Illuminate\Http\Response
     */
    public function show($crmv) {
        $aux = session('veterinarios');
        
        $index = array_search($crmv, array_column($aux, 'CRMV'));

        $data = $aux[$index];

        return view('veterinarios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $crmv
     * @return \Illuminate\Http\Response
     */
    public function edit($crmv) {
        $aux = session('veterinarios');
        
        $index = array_search($crmv, array_column($aux, 'CRMV'));

        $data = $aux[$index];

        return view('veterinarios.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $crmv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $crmv) {
        $aux = session('veterinarios');

        $index = array_search($crmv, array_column($aux, 'CRMV'));

        $new = [
            'CRMV' => $crmv,
            'nome' => $request->nome,
            'especialidade' => $request->especialidade
        ];

        $aux[$index] = $new;
        session(['veterinarios' => $aux]);

        return redirect()->route('veterinario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $crmv
     * @return \Illuminate\Http\Response
     */
    public function destroy($crmv) {
        $aux = session('veterinarios');
        
        $index = array_search($crmv, array_column($aux, 'CRMV')); 

        unset($aux[$index]);

        session(['veterinarios' => $aux]);

        return redirect()->route('veterinarios.index');
    }
}
