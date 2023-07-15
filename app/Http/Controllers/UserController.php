<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        //recuperation de user connecter
        $userConnected = Auth::user();
        $user = $userConnected;
        return view('admin.compte.index', [
            'user' => $user
        ]);
    }

    public function update(UserUpdateRequest $request)
    {
        //recuperation de user connecter
        $userConnected = Auth::user();
        $id = $userConnected->id;
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
        return redirect()->route('Admin.user.connected')->with('success', 'modification du compte réussi');
    }
}
