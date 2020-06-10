<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Requests\ActividadEditRequest;
use App\Http\Requests\ActividadCreateRequest;
use DB;
use Auth;
use Illuminate\Support\Facades\Route;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

            $acti=Actividad::OrderBy('fecha')
            ->where('fecha','>=', now()->toDateString())
            ->palabra($request->get('palabra'))
            ->paginate('3');


            $activas = DB::table('actividads')
                ->where('fecha','>=', now()->toDateString())
                ->count();
            return view('actividades.index',compact('acti','activas','request'));
        }


        public function asiste(){
            $actii=Actividad::OrderBy('fecha')
            ->where('fecha','>=', now()->toDateString())->paginate('3');
            
 
            
            return view('actividades.asiste',compact('actii'));

        }

        public function index2(Request $request)
        {
    
                $acti=Actividad::OrderBy('fecha')
                ->palabra($request->get('palabra'))
                ->fecha($request->get('activas'))
                ->paginate('3');
    
            return view('actividades.historial',compact('acti','request'));
            }


            public function admin(Request $request)
            {
        
                $acti=Actividad::OrderBy('fecha')
                ->palabra($request->get('palabra'))
                ->fecha($request->get('activas'))
                ->paginate('3');
    
                return view('actividades.admin',compact('acti'));
                }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActividadCreateRequest $request)
    {
        $datos=$request->validated();
        $actividad=new Actividad();
        $actividad->titulo=$datos['titulo'];
        $actividad->fecha=$datos['fecha'];
        $actividad->descripcion=$datos['descripcion'];
        $actividad->save();

        return redirect()->route('admin')->with('mensaje','Actividad Guardada');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        $cont = $actividad->usuarios->count();
        //$asistentes = $actividad->usuarios()->get();
        $asiste=0;
        foreach($actividad->usuarios as $asistente){
        if ($asistente->id==Auth::user()->id){
            $asiste++;
        }
        }
        
        return view('actividades.show',compact('actividad','cont','asiste'));
        
    }

    public function showadmin(Actividad $actividad)
    {
        $cont = $actividad->usuarios->count();
        //$asistentes = $actividad->usuarios()->get();
        $asiste=0;
        foreach($actividad->usuarios as $asistente){
        if ($asistente->id==Auth::user()->id){
            $asiste++;
        }
        }
        
        return view('actividades.showadmin',compact('actividad','cont','asiste'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        return view('actividades.edit',compact('actividad'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(ActividadEditRequest $request, Actividad $actividad)
    {
        $datos=$request->validated();
        $actividad->update($datos);
        
        return redirect()->route('admin')->with("mensaje", "Actividad Modificada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('admin')->with('mensaje','Actividad eliminada');
    }

    public function unirse(Request $request)
    {
        $actividad = Actividad::find($request->actividad_id);
        $actividad->usuarios()->attach($request->user_id);
        return redirect()->route("actividades")->with("mensaje","Te has unido a la actividad");

    }
}
