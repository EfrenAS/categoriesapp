<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Subcategoria;

class SubcategoriaController extends Controller
{
    public function index(): View
    {
        $subcategorias = Subcategoria::all();
        return view('subcategoria.index', compact('subcategorias'));
    }
    
    public function create(): View
    {
        $categorias = Categoria::all();

        return View('subcategoria.create', compact('categorias'));
    }

    public function store(Request $request): RedirectResponse
    {
        Subcategoria::create($request->all());
        return redirect()->route('subcategoria.index');
    }
}
