<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisterControllers extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.auth.index', [
            'users' => $users
        ]);
    }
    public function create()
    {
        return view('admin.auth.action.index');
    }

    public function store(RegisterRequest $request)
    {
        
      
        $genre = $request->validated('genre');

        if ($genre !== 'Masculin' && $genre !== 'Feminin') {
            return redirect()->route('Admin.auth.index')->with('error', 'Echec de la création du compte');
        }

        $role = $request->validated('position');
        if ($role !== 'Moderateur' && $role !== 'Administrateur')    {
            return redirect()->route('Admin.auth.index')->with('error', 'Echec de la création du compte');
        }
        $user = User::create($request->validated());
        $picture = $request->validated('picture');
        if ($picture !== null && !$picture->getError()) {
            $data['picture'] = $picture->store('profile', 'public');
        }
        $user->update($data);
        
        //event(new Registered($user));

        return redirect()->route('Admin.auth.index')->with('success', 'création du compte réussi');
    }
}
