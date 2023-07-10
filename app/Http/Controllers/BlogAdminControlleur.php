<?php

namespace App\Http\Controllers;

use App\Http\Requests\blogRequest;
use App\Models\Blog;
use App\Models\Sampana;
use Illuminate\Http\Request;

class BlogAdminControlleur extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blog.index', [
            'blog' => $blog
        ]);
    }

    public function create()
    {
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.blog.action.create', [
            'sampana' => $sampana
        ]);
    }

    public function store(Blog $blog, blogRequest $request)
    {
        $blog = Blog::create($request->validated());
        
        $blog->sampana()->sync(['blog_id' => $blog->id], $request->validated('category'));
        $blog->update($request->validated());
        //image 1
        $picture = $request->validated('image');
        if ($picture !== null && !$picture->getError()) {
            $data['image'] = $picture->store('blog', 'public');
        }
        $blog->update($data);
        //image 2
        $picture_2 = $request->validated('picture_2');
        if ($picture_2 !== null && !$picture_2->getError()) {
            $data['picture_2'] = $picture_2->store('blog', 'public');
        }
        $blog->update($data);

        return redirect()->route('Admin.blog')->with('success', 'Création de l\'actualité réussi');
    }

    public function modify(string $id)
    {
        $blog = Blog::findOrFail($id);
        $sampana = Sampana::pluck('name', 'id');
        return view('admin.blog.action.modify', [
            'blog' => $blog,
            'sampana' => $sampana
        ]);
    }

    public function update(blogRequest $request,Blog $blog, string $id) 
    {
        $blog = Blog::findOrFail($id);
        //recuperation de picture si vide ou  pas
        $blog->sampana()->sync(['blog_id' => $blog->id], $request->validated('category'));
        
        $blog->update($request->validated());
        /** redirection des image dans les dossier */

        $picture = $request->validated('image');
        if (empty($picture)){
            $picture = $blog->picture;
        } else {
            //image 1
            $data['image'] = $picture->store('blog', 'public');
            
            $blog->update($data);
        }
        
        $picture_2 = $request->validated('picture_2');
        if (empty($picture_2)){
            $picture_2 = $blog->picture_2;
        } else {
                //image 2
            $data['picture_2'] = $picture_2->store('blog', 'public');
            $blog->update($data);
        }
     
        return redirect()->route('Admin.blog.modify.update', ['id' => $blog->id])->with('success', 'modification réussi');
    }
    public function delete(string $id)
    {   
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('Admin.blog')->with('success', 'Suppréssion réussi');
    }

    public function sampana()
    {
        return view('admin.sampana.action.create');
    }
}
