<?php

namespace App\Http\Controllers;

use App\Models\FrequenciaAlimentar;
use Illuminate\Http\Request;

class FrequenciaAlimentarContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FrequenciaAlimentar::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return FrequenciaAlimentar::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FrequenciaAlimentar::findOrFail($id);
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
        $frequenciaAlimentar = FrequenciaAlimentar::findOrFail($id);

        $frequenciaAlimentar->update($request->all());

        return $frequenciaAlimentar;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return FrequenciaAlimentar::destroy($id, [
            'message' => 'Frequencia Alimentar removida sucesso.',
        ], 201);
    }
}
