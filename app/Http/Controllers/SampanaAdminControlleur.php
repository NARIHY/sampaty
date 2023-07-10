<?php

namespace App\Http\Controllers;

use App\Models\Maitso;
use App\Models\Mavo;
use App\Models\Mena;
use App\Models\Menafify;
use App\Models\Sampana;
use Illuminate\Http\Request;

class SampanaAdminControlleur extends Controller
{
    public function index()
    {
        $sampana = Sampana::paginate(4);
        return view('admin.sampana.index', [
            'sampana' => $sampana
        ]);
    }
    /**
     * 1- recuperer l'url
     * 2- verifier si l'id existe dans la table sampana
     * 3- si oui recuperer les resultat dans autre table
     */

    public function view(string $id)
    {
        $verifier = Sampana::findOrFail($id);
        //recuperena indray ilay nom dia manao systeme de vue samihafa
        $name = $verifier->name;
        
        if($name === "Sampana mavo") {
            $mavo = Mavo::orderBy('created_at', 'desc')->paginate(15);
            return view('admin.sampana.mavo.index', [
                'mavo' => $mavo
            ]);
        } elseif ($name === "Sampana maitso") {
            $maitso = Maitso::orderBy('created_at', 'desc')->paginate(15);
            return view('admin.sampana.maitso.index', [
                'maitso' => $maitso
            ]);
        } elseif ($name === "Sampana mena") {
            $mena = Mena::orderBy('created_at', 'desc')->paginate(15);
            return view('admin.sampana.mena.index', [
                'mena' => $mena
            ]);
        } elseif ($name === "Menafify") {
            $menafify = Menafify::orderBy('created_at', 'desc')->paginate(15);
            return view('admin.sampana.menafify.index', [
                'menafify' => $menafify
            ]);
        } else {
            return view('admin.sampana.index');
        }  
     
    }
    
    public function add()
    {
        return view('admin.sampana.action.create');
    }
}
