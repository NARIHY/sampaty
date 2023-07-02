<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
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
        return view('scout.show.show')->with('blog', $blog);
     }

     public function sampana()
     {
         return "sampana";
     }

     public function actualite()
     {
         return 'actualite';
     }
     public function propos()
     {
         return "propos";
     }

     

}
