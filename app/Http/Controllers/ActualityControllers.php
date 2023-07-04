<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use Illuminate\Http\Request;

class ActualityControllers extends Controller
{
    public function show(string $title, string $id)
    {
        $actuality = Actuality::findOrFail($id);

        if ($actuality->title !== $title) {
            return redirect()->route('Blog.actuShow', ['title' => $actuality->title, 'id' => $actuality->id]);
        }
        return view('scout.actuality.show.show')->with('actuality', $actuality);
    }
}
