<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(RegisterUpdateRequest $request, string $id)
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
        return redirect()->route('Admin.modify.compte')->with('success', 'modification du compte réussi');
    }
}
