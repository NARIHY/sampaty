<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaitsoUpdateRequest;
use App\Models\Mena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenaControlleur extends Controller
{
    public function modify(string $id)
    {
        $maitso = Mena::findOrFail($id);
        return view('admin.sampana.mena.action.edit',[
            'maitso' =>$maitso
        ]);
    }

    public function update(MaitsoUpdateRequest $request,Mena $mena, string $id) 
    {
        $mena = Mena::findOrFail($id);
        
        //recuperation de picture si vide ou  pas
        
        $mena->update($request->validated());
        /** redirection des image dans les dossier */

        $picture = $request->validated('image');
        if (empty($picture)){
            $picture = $mena->picture;
        } else {
            //image 1
            $data['image'] = $picture->store('sampana', 'public');
            
            $mena->update($data);
        }
        
        $picture_2 = $request->validated('image_2');
        
        if (empty($picture_2)){
            $picture_2 = $mena->picture_2;
        } else {
                //image 2
            $data['image_2'] = $picture_2->store('sampana', 'public');
            $mena->update($data);
        }

        $picture_3 = $request->validated('image_3');
        if (empty($picture_3)){
            $picture_3 = $mena->picture_2;
        } else {
                //image 2
            $data['image_3'] = $picture_3->store('sampana', 'public');
            $mena->update($data);
        }
        //recuperation de user en session
        $userConnected = Auth::user();
        $mena->posted_by = $userConnected->id;
        $mena->save();
     
        return redirect()->route('Admin.sampana.mena.modify', ['id' => $mena->id])->with('success', 'modification réussi');
    }
}
