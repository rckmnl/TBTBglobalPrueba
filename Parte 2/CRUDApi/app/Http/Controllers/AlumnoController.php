<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $alumnos = Alumno::all();
      return response()->json([
        'datos' => $alumnos
    ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findById($id)
    {
         try {
            $alumno = Alumno::findOrFail($id);
            return  response()->json([
                'datos' => $alumno
            ], 200);

        } catch (\Throwable $th) {
            return  response()->json([
                'mensaje' => "no existen datos de este alumno"
            ], 400);
        }   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(),
        [
            'edad' => ['integer']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
    
        try {
        $alumno = new Alumno();
        $alumno -> nombre = $request-> nombre;
        $alumno -> apellido = $request-> apellido;
        $alumno -> email = $request-> email;
        $alumno -> edad = $request-> edad;

        $alumno->save();
        
        return response()->json([
            'datos' => $alumno
        ], 200);
        } catch (\Throwable $th) {
            return  response()->json([
                'mensaje' => $th->getMessage()
            ], 400);
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
    public function update(Request $request)
    {
        
        $validator = \Validator::make($request->all(),
        [
            'edad' => ['integer']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
    
        try {
        $alumno = Alumno::findOrFail($request->id);
        $alumno->update($request->all());
        return response()->json([
            'datos' => $alumno
        ], 200);
        } catch (\Throwable $th) {
            return  response()->json([
                'mensaje' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $alumno = Alumno::destroy($request->id);
            return response()->json([
                'mensaje' => "Eliminado con exito"
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'mensaje' => $th->getMessage()
            ], 400);
        }
    }
}
