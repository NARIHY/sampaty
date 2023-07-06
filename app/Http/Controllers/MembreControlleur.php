<?php

namespace App\Http\Controllers;

use App\Models\Andraikitra;
use App\Models\Membre;
use App\Models\Sampana;
use Illuminate\Http\Request;

class MembreControlleur extends Controller
{
    public function index()
    {
        $membre = new Membre();
        $sampana = Sampana::pluck('name', 'id');
        $andraikitra = Andraikitra::pluck('name', 'id');
        return view('admin.membre.action.index', [
            'membre' => $membre,
            'sampana' => $sampana,
            'andraikitra' => $andraikitra
        ]);
    }
    public function create()
    {
        return "hello";
    }
}
