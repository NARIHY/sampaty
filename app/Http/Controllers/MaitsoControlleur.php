<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaitsoRequest;
use App\Http\Requests\MaitsoUpdateRequest;
use App\Http\Requests\SampanaRequest;
use App\Models\Maitso;
use App\Models\Mavo;
use App\Models\Mena;
use App\Models\Menafify;
use Illuminate\Http\Request;

class MaitsoControlleur extends Controller
{
    public function modify(string $id)
    {
        $maitso = Maitso::findOrFail($id);
        return view('admin.sampana.maitso.action.edit',[
            'maitso' =>$maitso
        ]);
    }

    public function update(MaitsoUpdateRequest $request,Maitso $maitso, string $id) 
    {
        $maitso = Maitso::findOrFail($id);
        
        //recuperation de picture si vide ou  pas
        
        $maitso->update($request->validated());
        /** redirection des image dans les dossier */

        $picture = $request->validated('image');
        if (empty($picture)){
            $picture = $maitso->picture;
        } else {
            //image 1
            $data['image'] = $picture->store('sampana', 'public');
            
            $maitso->update($data);
        }
        
        $picture_2 = $request->validated('image_2');
        if (empty($picture_2)){
            $picture_2 = $maitso->picture_2;
        } else {
                //image 2
            $data['image_2'] = $picture_2->store('sampana', 'public');
            $maitso->update($data);
        }

        $picture_3 = $request->validated('image_3');
        if (empty($picture_3)){
            $picture_3 = $maitso->picture_2;
        } else {
                //image 2
            $data['image_3'] = $picture_3->store('sampana', 'public');
            $maitso->update($data);
        }
     
        return redirect()->route('Admin.sampana.maitso.modify', ['id' => $maitso->id])->with('success', 'modification réussi');
    }

    

    public function store(Maitso $maitso, Mavo $mavo, Mena $mena, Menafify $menafify, SampanaRequest $request)
    {
        $verifier = $request->validated('sampana');

        

        if ($verifier === 'Maitso') {
            $maitso = Maitso::create($request->validated());
        
            $maitso->update($request->validated());
            //image 1
            $picture = $request->validated('image');
            if ($picture !== null && !$picture->getError()) {
                $data['image'] = $picture->store('sampana', 'public');
            }
            $maitso->update($data);
            //image 2
            $picture_2 = $request->validated('image_2');
            if ($picture_2 !== null && !$picture_2->getError()) {
                $data['image_2'] = $picture_2->store('sampana', 'public');
            }
            $maitso->update($data);
            //image 3
            $picture_3 = $request->validated('image_3');
            if ($picture_3 !== null && !$picture_3->getError()) {
                $data['image_3'] = $picture_3->store('sampana', 'public');
            }
            $maitso->update($data);

            return redirect()->route('Admin.sampana.view', ['id' => '2'])->with('success', 'Création de la publication réussi');
        
        } elseif ($verifier === 'Mavo') {
            $mavo = Mavo::create($request->validated());
        
            $mavo->update($request->validated());
            //image 1
            $picture = $request->validated('image');
            if ($picture !== null && !$picture->getError()) {
                $data['image'] = $picture->store('sampana', 'public');
            }
            $mavo->update($data);
            //image 2
            $picture_2 = $request->validated('image_2');
            if ($picture_2 !== null && !$picture_2->getError()) {
                $data['image_2'] = $picture_2->store('sampana', 'public');
            }
            $mavo->update($data);
            //image 3
            $picture_3 = $request->validated('image_3');
            if ($picture_3 !== null && !$picture_3->getError()) {
                $data['image_3'] = $picture_3->store('sampana', 'public');
            }
            $mavo->update($data);

            return redirect()->route('Admin.sampana.view', ['id' => '1'])->with('success', 'Création de la publication réussi');
        
        } elseif ($verifier === 'Mena') {
            $mena = Mena::create($request->validated());
        
            $mena->update($request->validated());
            //image 1
            $picture = $request->validated('image');
            if ($picture !== null && !$picture->getError()) {
                $data['image'] = $picture->store('sampana', 'public');
            }
            $mena->update($data);
            //image 2
            $picture_2 = $request->validated('image_2');
            if ($picture_2 !== null && !$picture_2->getError()) {
                $data['image_2'] = $picture_2->store('sampana', 'public');
            }
            $mena->update($data);
            //image 3
            $picture_3 = $request->validated('image_3');
            if ($picture_3 !== null && !$picture_3->getError()) {
                $data['image_3'] = $picture_3->store('sampana', 'public');
            }
            $mena->update($data);

            return redirect()->route('Admin.sampana.view', ['id' => '3'])->with('success', 'Création de la publication réussi');
        
        } elseif ($verifier === 'Menafify') {
            $menafify = Menafify::create($request->validated());
        
            $menafify->update($request->validated());
            //image 1
            $picture = $request->validated('image');
            if ($picture !== null && !$picture->getError()) {
                $data['image'] = $picture->store('sampana', 'public');
            }
            $menafify->update($data);
            //image 2
            $picture_2 = $request->validated('image_2');
            if ($picture_2 !== null && !$picture_2->getError()) {
                $data['image_2'] = $picture_2->store('sampana', 'public');
            }
            $menafify->update($data);
            //image 3
            $picture_3 = $request->validated('image_3');
            if ($picture_3 !== null && !$picture_3->getError()) {
                $data['image_3'] = $picture_3->store('sampana', 'public');
            }
            $menafify->update($data);

            return redirect()->route('Admin.sampana.view', ['id' => '4'])->with('success', 'Création de la publication réussi');
        
        } else {
            return redirect()->route('Admin.blog.create.create')->with('error', 'Echec de l\'ajout de la publication');
        }
    }
}
