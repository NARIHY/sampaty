<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualityRequest;
use App\Http\Requests\ActualityUpdateRequest;
use App\Models\Actuality;
use App\Models\Sampana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualityControllers extends Controller
{
    public function show(string $title, string $id)
    {
        $actuality = Actuality::findOrFail($id);

        if ($actuality->title !== $title) {
            return redirect()->route('Blog.actuShow', ['title' => $actuality->title, 'id' => $actuality->id]);
        }
        return view('scout.actuality.show.show')->with('actuality', $actuality);
    }

    public function admin()
    {
        $actuality = Actuality::orderBy('created_at', 'desc')->paginate(20);
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.actuality.index', [
            'actuality' => $actuality,
            'sampana' => $sampana
        ]);
    }
    public function create()
    {
        $actuality = new Actuality();
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.actuality.action.index', [
            'actuality' => $actuality,
            'sampana' => $sampana
        ]);
    }

    public function store(Actuality $actuality, ActualityRequest $request)
    {
    
        
        $actuality = Actuality::create($request->validated());
        
        $actuality->sampana()->sync(['actuality_id' => $actuality->id], $request->validated('sampana'));
        $actuality->update($request->validated());
        //image 1
        $picture = $request->validated('picture');
        if ($picture !== null && !$picture->getError()) {
            $data['picture'] = $picture->store('actuality', 'public');
        }
        $actuality->update($data);
        //image 2
        $picture_2 = $request->validated('picture_2');
        if ($picture_2 !== null && !$picture_2->getError()) {
            $data['picture_2'] = $picture_2->store('actuality', 'public');
        }
        $actuality->update($data);
        //image 2
        $picture_3 = $request->validated('picture_3');
        if ($picture_3 !== null && !$picture_3->getError()) {
            $data['picture_3'] = $picture_3->store('actuality', 'public');
        }
        $actuality->update($data);

        //recuperation de user en session
        $userConnected = Auth::user();
        $actuality->posted_by = $userConnected->id;
        $actuality->save();

        return redirect()->route('Admin.actualite')->with('success', 'Création de l\'actualité réussi');
    }

    public function modify(string $id)
    {
        $actuality = Actuality::findOrFail($id);
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.actuality.action.modify', [
            'actuality' => $actuality,
            'sampana' => $sampana
        ]);
    }

    public function update(ActualityUpdateRequest $request,Actuality $actuality, string $id) 
    {
        $actuality = Actuality::findOrFail($id);
        //recuperation de picture si vide ou  pas
        $actuality->sampana()->sync(['actuality_id' => $actuality->id], $request->validated('sampana'));
        
        $actuality->update($request->validated());
        /** redirection des image dans les dossier */

        $picture = $request->validated('picture');
        if (empty($picture)){
            $picture = $actuality->picture;
        } else {
            //image 1
            $data['picture'] = $picture->store('actuality', 'public');
            $actuality->update($data);
        }
        
        $picture_2 = $request->validated('picture_2');
        if (empty($picture_2)){
            $picture_2 = $actuality->picture_2;
        } else {
                //image 2
            $data['picture_2'] = $picture_2->store('actuality', 'public');
            $actuality->update($data);
        }
        
        $picture_3 = $request->validated('picture_3');
        if (empty($picture_3)){
            $picture_3 = $actuality->picture_3;
        } else {
                //image 3-
            $data['picture_3'] = $picture_3->store('actuality', 'public');
            $actuality->update($data);     
        }
        //recuperation de user en session
        $userConnected = Auth::user();
        $actuality->posted_by = $userConnected->id;
        $actuality->save();
       
        
        return redirect()->route('Admin.actualite.modify.update', ['id' => $actuality->id])->with('success', 'modification réussi');
    }
    public function delete(string $id)
    {   
        $actuality = Actuality::findOrFail($id);
        $actuality->delete();
        return redirect()->route('Admin.actualite')->with('success', 'Suppréssion réussi');
    }
}
