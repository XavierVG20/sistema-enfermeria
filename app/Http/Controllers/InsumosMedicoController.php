<?php

namespace App\Http\Controllers;

use App\Models\InsumosMedico;
use Illuminate\Http\Request;

/**
 * Class InsumosMedicoController
 * @package App\Http\Controllers
 */
class InsumosMedicoController extends Controller
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
             $insumosMedicos = InsumosMedico::orderBy('id', 'desc')->paginate(5);
        } else {
             $insumosMedicos = InsumosMedico::where($criterio, 'like', '%' . $buscar . '%')->orderBy('id', 'desc')->paginate(5);
        }

        return view('insumos-medico.index', compact('insumosMedicos'))
            ->with('i', (request()->input('page', 1) - 1) * $insumosMedicos->perPage());
    }

    public function reporte_insumos()
    {
        $insumosMedicos = InsumosMedico::orderBy('id', 'desc')->get();

        $pdf = \PDF::loadView('reportes.informe_insumos',compact('insumosMedicos'));
     return $pdf->download('reporte_insumos.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumosMedico = new InsumosMedico();
        return view('insumos-medico.create', compact('insumosMedico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InsumosMedico::$rules);

        $insumosMedico = InsumosMedico::create($request->all());

        return redirect()->route('insumosmedicos.index')
            ->with('success', 'InsumosMedico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insumosMedico = InsumosMedico::find($id);

        return view('insumos-medico.show', compact('insumosMedico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumosMedico = InsumosMedico::find($id);

        return view('insumos-medico.edit', compact('insumosMedico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InsumosMedico $insumosMedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsumosMedico $insumosMedico)
    {
        request()->validate(InsumosMedico::$rules);

        $insumosMedico->update($request->all());

        return redirect()->route('insumosmedicos.index')
            ->with('success', 'InsumosMedico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $insumosMedico = InsumosMedico::find($id)->delete();

        return redirect()->route('insumosmedicos.index')
            ->with('success', 'InsumosMedico deleted successfully');
    }
}
