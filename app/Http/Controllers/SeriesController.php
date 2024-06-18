<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = $request->session()->get("mensagem.sucesso");
        return view('series.index')->with("series", $series)->with("mensagemSucesso", $mensagemSucesso);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->all());
        return to_route('series.index')->with("mensagem.sucesso", "Série {$serie->name} criada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();
        return to_route('series.index')->with("mensagem.sucesso", "Série {$series->name} removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view("series.edit")->with("serie", $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with("mensage.sucesso", "Série {$series->name} atualizado com sucesso");
    }
}
