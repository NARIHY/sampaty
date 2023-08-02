<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpControlleur extends Controller
{
    public function index()
    {
        return view('admin.help.index');
    }

    public function manuelle()
    {
        return view('admin.help.manuel');
    }
}
