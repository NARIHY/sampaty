<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembreRequest;
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
    public function create(MembreRequest $request)
    {
        $membre = Membre::create($request->validated());
        $membre->sampana()->sync($request->validated('sampana'));
        $membre->andraikitra()->sync($request->validated('andraikitra'));
        return redirect()->route('Admin.validation')->with('success', 'Ajout d\'un membre réussi');
    }

    public function modify(Membre $membre, string $id)
    {
        //recuperation element selectionner
        
        $membre = Membre::findOrFail($id);

        $sampana = Sampana::pluck('name', 'id');
        $andraikitra = Andraikitra::pluck('name', 'id');
        return view('Admin.membre.action.edit', [
            'membre' => $membre,
            'sampana' => $sampana,
            'andraikitra' => $andraikitra
        ]);
    }

    public function update(Membre $membre, MembreRequest $request, string $id)
    {
        $membre = Membre::findOrFail($id);
        $membre->sampana()->sync(['membre_id' => $membre->id], $request->validated('sampana'));
        $membre->andraikitra()->sync(['membre_id' => $membre->id], $request->validated('andraikitra'));
        $membre->update($request->validated());
        return redirect()->route('Admin.message.update',['id'=> $membre->id, 'nom' => $membre->nom])->with('success', 'Modification du membre réussi');
    }
}

