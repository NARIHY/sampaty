<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualityRequest;
use App\Models\Actuality;
use App\Models\Sampana;
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

    public function admin()
    {
        $actuality = Actuality::orderBy('created_at', 'desc')->paginate(20);
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.actuality.index', [
            'actuality' => $actuality,
            'sampana' => $sampana
        ]);
    }
    public function create()
    {
        $actuality = new Actuality();
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.actuality.action.index', [
            'actuality' => $actuality,
            'sampana' => $sampana
        ]);
    }

    public function store(Actuality $actuality, ActualityRequest $request)
    {
    
        
        $actuality = Actuality::create($request->validated());
        
        $actuality->sampana()->sync(['actuality_id' => $actuality->id], $request->validated('sampana'));
        $actuality->update($request->validated());
        //image 1
        $picture = $request->validated('picture');
        if ($picture !== null && !$picture->getError()) {
            $data['picture'] = $picture->store('actuality', 'public');
        }
        $actuality->update($data);
        //image 2
        $picture_2 = $request->validated('picture_2');
        if ($picture_2 !== null && !$picture_2->getError()) {
            $data['picture_2'] = $picture->store('actuality', 'public');
        }
        $actuality->update($data);
        //image 2
        $picture_3 = $request->validated('picture_3');
        if ($picture_3 !== null && !$picture_2->getError()) {
            $data['picture_3'] = $picture->store('actuality', 'public');
        }
        $actuality->update($data);

        return redirect()->route('Admin.actualite')->with('success', 'Création de l\'actualité réussi');
    }
}
