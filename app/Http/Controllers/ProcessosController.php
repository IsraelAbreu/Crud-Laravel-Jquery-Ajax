<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProcessosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processos = \App\Processo::all();
        return view('index', compact('processos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $processo = \App\Processo::create($request->all());
        if(isset($processo)){
            $response['error'] = false;
            $response['msg'] = 'O processo foi adicionado!';
            $response['processo'] = $processo;
            return response($response, 201);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $processo = \App\Processo::find($id);
        if(!isset($processo)){
            $response['error'] = true;
            $response['msg'] = 'Processo não encontrado!';
            return response($response, 404);
        }
        $processoDeletado = $processo->delete();
        if($processoDeletado){
            $response['error'] = false;
            $response['msg'] = 'Processo excluído!';
            return response($response, 200);
        }
        $response['error'] = true;
        $response['msg'] = 'Não foi possível excluir o processo!';
        return response($response, 400);
    }
}