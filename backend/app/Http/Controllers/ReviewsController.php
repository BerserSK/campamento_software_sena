<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;


class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Aqui se mostraran todos los Bootcamps";
        return Reviews::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "Aqui se va a registrar un nuevo Bootcamp";
        //Capturo el Payload
        //Crear el nuevo Bootcamp
        //$request::find()->all();
        return Reviews::create(
            $request->all()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //return "Aqui va a mostrar un bootcamp especifico por id";
       return Reviews::find($id);
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
        //return "Actualizar un bootcamp especifico cuyo id sea $id";
        //1. Encontrar el Bootcamp por id
        $r = Reviews::find($id);
        //2. Actualizarlo
        $r->update($request->all());
        //3. Enviar response con el Bootcamp actualizado
        return $r;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "Eliminar un bootcamp especifico cuyo id sea $id";
        //1. Encontrar el bootcamp a eliminar por id
        $r = Reviews::find($id);
        //2. Eliminarlo
        $r->delete();
        //3. Un response con el objeto eliminado
        return $r;
    }
}
