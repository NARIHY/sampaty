<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaitsoRequest;
use App\Models\Maitso;
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

    public function update(MaitsoRequest $request,Maitso $maitso, string $id) 
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
}
