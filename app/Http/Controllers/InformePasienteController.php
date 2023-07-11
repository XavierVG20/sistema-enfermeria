<?php

namespace App\Http\Controllers;

use App\Models\InformePasiente;
use App\Models\InsumosMedico;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Class InformePasienteController
 * @package App\Http\Controllers
 */
class InformePasienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
        public function index(Request $request)
        {
            
    
            $buscar = $request->buscar;
            $criterio = $request->criterio;
    
            if ($buscar == '') {
                $informePasientes = InformePasiente::orderBy('id', 'desc')->paginate(5);
            } else {
                $informePasientes = InformePasiente::join('estudiantes','informe_pasientes.id_estudiante','=','estudiantes.id')
                ->select('*')
                ->where($criterio, 'like', '%' . $buscar . '%')->paginate(5);
            }
        return view('informe-pasiente.index', compact('informePasientes'))
            ->with('i', (request()->input('page', 1) - 1) * $informePasientes->perPage());
    }

    public function reporte_informes()
    {
        $informePasientes = InformePasiente::all();

        $pdf = \PDF::loadView('reportes.informe_pasentes',compact('informePasientes'));
     return $pdf->download('reporte_enfermeria.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $informePasiente = new InformePasiente();
        $insumosMedicos  = InsumosMedico ::pluck('nombre','id');

        $estudiantes =  Estudiante::pluck('nombres','id');
        return view('informe-pasiente.create', compact('informePasiente', 'insumosMedicos', 'estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InformePasiente::$rules);

        $informePasiente = InformePasiente::create($request->all());

        return redirect()->route('informe-pasientes.index')
            ->with('success', 'InformePasiente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informePasiente = InformePasiente::find($id);

        return view('informe-pasiente.show', compact('informePasiente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informePasiente = InformePasiente::find($id);
        $insumosMedicos  = InsumosMedico ::pluck('nombre','id');

        $estudiantes =  Estudiante::pluck('nombres','id');

        return view('informe-pasiente.edit', compact('informePasiente', 'insumosMedicos', 'estudiantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InformePasiente $informePasiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformePasiente $informePasiente)
    {
        request()->validate(InformePasiente::$rules);

        $informePasiente->update($request->all());

        return redirect()->route('informe-pasientes.index')
            ->with('success', 'InformePasiente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $informePasiente = InformePasiente::find($id)->delete();

        return redirect()->route('informe-pasientes.index')
            ->with('success', 'InformePasiente deleted successfully');
    }
}
