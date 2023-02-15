<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Ordenadore;
use Illuminate\Http\Request;

/**
 * Class OrdenadoreController
 * @package App\Http\Controllers
 */
class OrdenadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenadores = Ordenadore::paginate();

        return view('ordenadore.index', compact('ordenadores'))
            ->with('i', (request()->input('page', 1) - 1) * $ordenadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aulas = Aula::pluck('nombre','id');
        $ordenadore = new Ordenadore();
        return view('ordenadore.create', compact('ordenadore','aulas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ordenadore::$rules);

        $ordenadore = Ordenadore::create($request->all());

        return redirect()->route('ordenadores.index')
            ->with('success', 'Ordenadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordenadore = Ordenadore::find($id);

        return view('ordenadore.show', compact('ordenadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenadore = Ordenadore::find($id);

        return view('ordenadore.edit', compact('ordenadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ordenadore $ordenadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordenadore $ordenadore)
    {
        request()->validate(Ordenadore::$rules);

        $ordenadore->update($request->all());

        return redirect()->route('ordenadores.index')
            ->with('success', 'Ordenadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordenadore = Ordenadore::find($id)->delete();

        return redirect()->route('ordenadores.index')
            ->with('success', 'Ordenadore deleted successfully');
    }
}
