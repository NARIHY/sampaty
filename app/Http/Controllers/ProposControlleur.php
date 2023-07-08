<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProposRequest;
use App\Models\Propos;
use Illuminate\Http\Request;

class ProposControlleur extends Controller
{
    public function index()
    {
        $propos = Propos::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.information.index', [
            //ilay blog eto $blog ihn
           'propos' => $propos
        ]);
    }

     public function create()
    {
        return view('admin.information.action.create');
    }

    public function store(Propos $propos, ProposRequest $request)
    {
        $propos = Propos::create($request->validated());

        //image 1
        $picture = $request->validated('image');
        if ($picture !== null && !$picture->getError()) {
            $data['image'] = $picture->store('information', 'public');
        }
        $propos->update($data);
        //image 2
        $picture_2 = $request->validated('image_2');
        if ($picture_2 !== null && !$picture_2->getError()) {
            $data['image_2'] = $picture_2->store('information', 'public');
        }
        $propos->update($data);

        return redirect()->route('Admin.information')->with('success', 'Création de l\'actualité réussi');
    }

    public function modify(string $id)
    {
        $propos = Propos::findOrFail($id);
        return view('admin.information.action.modify', [
            'propos' => $propos
        ]);
    }

    public function update(ProposRequest $request,Propos $propos, string $id) 
    {
        $propos = Propos::findOrFail($id);
        //recuperation de picture si vide ou  pas
        $propos->update($request->validated());
        /** redirection des image dans les dossier */

        $picture = $request->validated('image');
        if (empty($picture)){
            $picture = $propos->picture;
        } else {
            //image 1
            $data['image'] = $picture->store('information', 'public');
            
            $propos->update($data);
        }
        
        $picture_2 = $request->validated('image_2');
        if (empty($picture_2)){
            $picture_2 = $propos->image_2;
        } else {
                //image 2
            $data['image_2'] = $picture_2->store('information', 'public');
            $propos->update($data);
        }
     
        return redirect()->route('Admin.information.modify.update', ['id' => $propos->id])->with('success', 'modification réussi');
    }

    public function delete(string $id)
    {   
        $propos = Propos::findOrFail($id);
        $propos->delete();
        return redirect()->route('Admin.information')->with('success', 'Suppréssion réussi');
    }
}
