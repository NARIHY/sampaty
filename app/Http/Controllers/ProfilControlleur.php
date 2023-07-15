<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.profil.index', [
            'user' => $user
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $userConnected = Auth::user();
        if($userConnected->position !== 'Administrateur'){
            return redirect()->route('Admin.home')->with('error', 'Désolé, vous n\'avez pas accès a ce page');
        }
        return view('admin.profil.edit.index', [
            'user' => $user
        ]);
            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id,RegisterUpdateRequest $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());
        /** redirection des image dans les dossier */

        $picture = $request->validated('picture');
        if (empty($picture)){
            $picture = $user->picture;
        } else {
            //image 1
            $data['picture'] = $picture->store('profile', 'public');
            
            $user->update($data);
        }
        return redirect()->route('Admin.modify.compte',['id' => $user->id])->with('success', 'modification du compte réussi');
    }

   
}
