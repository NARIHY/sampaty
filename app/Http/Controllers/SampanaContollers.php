<?php

namespace App\Http\Controllers;

use App\Models\Maitso;
use App\Models\Mavo;
use App\Models\Mena;
use App\Models\Menafify;
use Illuminate\Http\Request;

class SampanaContollers extends Controller
{
    public function index() 
    {
        $mavo = Mavo::orderBy('created_at', 'desc')->paginate(2);
        $maitso = Maitso::orderBy('created_at', 'desc')->paginate(2);
        $mena = Mena::orderBy('created_at', 'desc')->paginate(2);
        $menafify = Menafify::orderBy('created_at', 'desc')->paginate(2);
        return view('scout.sampana.index', [
           'mavo' => $mavo,
           'maitso' => $maitso,
           'mena' => $mena,
           'menafify' => $menafify
        ]);
    }

    public function mavo()
    {
        $mavo = Mavo::orderBy('created_at', 'desc')->paginate(10);
        return view('scout.sampana.mavo.index', [
            'mavo' => $mavo
         ]);
    }

    public function maitso()
    {
        $maitso = Maitso::orderBy('created_at', 'desc')->paginate(10);
        return view('scout.sampana.maitso.index', [
            'maitso' => $maitso
         ]);

    }

    public function mena()
    {
        $mena = Mena::orderBy('created_at', 'desc')->paginate(10);
        return view('scout.sampana.mena.index', [
            'mena' => $mena
         ]);
    }

    public function menafify()
    {
        $menafify = Menafify::orderBy('created_at', 'desc')->paginate(10);
        return view('scout.sampana.menafify.index', [
            'menafify' => $menafify
         ]);
    }
}
