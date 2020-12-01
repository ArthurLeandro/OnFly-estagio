<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despesas;

class DespesasController extends Controller
{
    //

    public function index()
    {
        $despesas= Despesas::all();
        return view('despesas', [
            despesas=>$despesas,
        ]);
    }

    public function show()
    {
        //TODO vai ter uma visão que só recebe uma despesa?
        return view('home');
    }

    public function create()
    {
        return view('despesas/create');
    }

    public function store()
    {
        $despesa = new Despesas();
        //TODO pegar os valores dentro do request
        return redirect('home');
    }

    public function delete($id)
    {
        $despesa = FindByID($id);
        $despesa->delete();
        return redirect('/despesas');
    }

    private function FindByID($id)
    {
        return Despesas::findOrFail($id);
    }
}
