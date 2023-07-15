<?php

namespace App\Http\Controllers;

use App\Models\Maitso;
use App\Models\Mavo;
use App\Models\Mena;
use App\Models\Menafify;
use Illuminate\Http\Request;

class SampanaShowsController extends Controller
{
    public function mavo(string $id)
    {
        $mavo = Mavo::findOrFail($id);

        return view('scout.sampana.mavo.show.show', [
            'mavo' => $mavo
        ]);
    }
    public function maitso(string $id)
    {
        $maitso = Maitso::findOrFail($id);

        return view('scout.sampana.maitso.show.show', [
            'maitso' => $maitso
        ]);
    }
    public function mena(string $id)
    {
        $mena = Mena::findOrFail($id);

        return view('scout.sampana.mena.show.show', [
            'mena' => $mena
        ]);
    }
    public function menafify(string $id)
    {
        $menafify = Menafify::findOrFail($id);

        return view('scout.sampana.menafify.show.show', [
            'menafify' => $menafify
        ]);
    }
}
