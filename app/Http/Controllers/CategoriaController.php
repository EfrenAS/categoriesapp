<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(): View
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }

    public function create(): View
    {
        return View('categoria.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Categoria::create($request->all());
        return redirect()->route('categoria.index');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function show()
    {
    }

    public function destroy()
    {
    }
}
