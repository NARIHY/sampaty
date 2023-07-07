<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use App\Models\Blog;
use App\Models\Contacte;
use App\Models\Membre;
use App\Models\Propos;
use App\Models\Sampana;
use Illuminate\Http\Request;

class AdminControlleur extends Controller
{
    public function index()
     {
        $blog = Blog::orderBy('created_at', 'desc')->paginate(1);
        $sampana = Sampana::paginate(4);
        $actuality = Actuality::orderBy('created_at', 'desc')->paginate(1);
        $info = Propos::orderBy('created_at', 'desc')->paginate(1);
        return view('admin.index', [
            'info' => $info,
            'sampana' => $sampana,
            'actuality' => $actuality,
            'blog' => $blog
        ]);
     }

    public function membre()
    {
        $membre = Membre::orderBy('created_at', 'asc')->paginate(25);
        return view('admin.membre.index', [
            'membre' => $membre
        ]);
    }

    public function message()
    {
        $message = Contacte::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.contacte.index', [
            'message' => $message
        ]);
    }
}
