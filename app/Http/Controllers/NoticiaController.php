<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::all();

        return view('noticias.index-noticias', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('noticias.create-noticias');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:255',
            'fecha' => 'required|email',
            'categoria' => ['required', 'min:3'],
            'noticia' => ['required', 'min:10']
        ]);

        Noticia::create($request->all());

        return redirect()->route('noticia.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        return view('noticias.show-noticia', compact('noticias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        return view('noticias.edit-noticia', compact('noticias')); //compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:255',
            'fecha' => 'required|email',
            'categoria' => ['required', 'min:3'],
            'noticia' => ['required', 'min:10']
        ]);

        $noticia->update($request->all());

        return redirect()->route('noticia.show', $noticia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()->route('noticia.index');
    }
}
