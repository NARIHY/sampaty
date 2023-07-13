<?php

namespace App\Http\Controllers;

use App\Models\Maitso;
use App\Models\Mavo;
use App\Models\Mena;
use App\Models\Menafify;
use Illuminate\Http\Request;

class DeleteControllers extends Controller
{
    public function mavo(string $id)
    {   
        $mavo = Mavo::findOrFail($id);
        $mavo->delete();
        return redirect()->route('Admin.sampana.view', ['id'=> '1'])->with('success', 'Suppréssion réussi');
    }
    public function maitso(string $id)
    {   
        $mavo = Maitso::findOrFail($id);
        $mavo->delete();
        return redirect()->route('Admin.sampana.view', ['id'=> '2'])->with('success', 'Suppréssion réussi');
    }

    public function mena(string $id)
    {   
        $mavo = Mena::findOrFail($id);
        $mavo->delete();
        return redirect()->route('Admin.sampana.view', ['id'=> '3'])->with('success', 'Suppréssion réussi');
    }

    public function menafify(string $id)
    {   
        $mavo = Menafify::findOrFail($id);
        $mavo->delete();
        return redirect()->route('Admin.sampana.view', ['id'=> '4'])->with('success', 'Suppréssion réussi');
    }
}
