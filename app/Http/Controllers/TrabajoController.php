<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['trabajos']=Trabajo::paginate(1);
        return view('trabajo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trabajo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
           'Nombre'=>'required|string|max:100',
           'Empresa'=>'required|string|max:100',
           'Email'=>'required|email',
           'Telefono'=>'required|string',

        ];
        $mensaje=[
            'required'=>'El/La :attribute es requerido',
    
    ];

        $this->validate($request, $campos,$mensaje);


        //$datosTrabajo=request()->all();
          $datosTrabajo=request()->except('_token');

          Trabajo::insert($datosTrabajo);

        //return response()->json($datosTrabajos);
        return redirect('trabajo')->with('mensaje','Trabajo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajo $trabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trabajo=Trabajo::findOrFail($id);
        return view('trabajo.edit',compact('trabajo') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {     $campos=[
        'Nombre'=>'required|string|max:100',
        'Empresa'=>'required|string|max:100',
        'Correo'=>'required|email',
        'Telefono'=>'required|string|max:100',


     ];
     $mensaje=[
             'required'=>'El :attribute es requerido',
            
     
     ];

     $this->validate($request, $campos,$mensaje);

        //
        $datosTrabajo = request()->except(['_token','_method']);

        Trabajo::where('id','=',$id)->update($datosTrabajo);

        $trabajo=Trabajo::findOrFail($id);
        //return view('trabajo.edit', compact('trabajo') );

        return redirect('trabajo')->with('mensaje','Trabajo Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trabajo=Trabajo::findOrFail($id);
    
    


        return redirect('trabajo')->with('mensaje','Trabajo Borrado');
    }
}
