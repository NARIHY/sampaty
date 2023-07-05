<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacteRequest;
use App\Models\Contacte;
use Illuminate\Http\Request;

class ContacteController extends Controller
{
    public function contacte(ContacteRequest $request)
    {
        $contacte = Contacte::create($request->validated());
        return redirect()->route('home')->with('success', 'Merci de nous avoir contacter');
    }

    
}
