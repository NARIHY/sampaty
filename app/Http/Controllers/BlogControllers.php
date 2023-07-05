<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Maitso;
use App\Models\Mavo;
use App\Models\Mena;
use App\Models\Menafify;
use App\Models\Propos;
use Illuminate\Contracts\Pagination\Paginator;

class BlogControllers extends Controller
{
    /**
     * @method mixed index() //permet d'afficher les elements poster dans le blog
     */

     public function index()
     {
        $blog = Blog::orderBy('created_at', 'desc')->paginate(9);
        return view('scout.blog.blog', [
            //ilay blog eto $blog ihn
           'blog' => $blog
        ]);
     }

     public function show(string $slug, string $id)
     {
        $blog = Blog::findOrFail($id);

        if ($blog->slug !== $slug) {
            return redirect()->route('Blog.show', ['slug' => $blog->slug, 'id' => $blog->id]);
        }
        return view('scout.blog.show.show')->with('blog', $blog);
     }
     public function actualite()
     {
        $actuality = Actuality::orderBy('created_at', 'desc')->paginate(10);
        return view('scout.actuality.index', [
            'actuality' => $actuality
        ]);
     }
     public function propos()
     {
        $propos = Propos::orderBy('created_at', 'desc')->paginate(5);
        $blog = Blog::orderBy('created_at', 'desc')->paginate(2);
        $actuality = Actuality::orderBy('created_at', 'desc')->paginate(2);
        return view('scout.information.index', [
            'propos' => $propos,
            'blog' => $blog,
            'actuality' => $actuality
        ]);
     }

     

}
