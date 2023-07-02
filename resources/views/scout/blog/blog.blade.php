@extends('layout')

@section('title', 'Blog')

@section('content')
<div class="row mb-3 text-center" style="margin-top: 10px">
    
    @foreach($blog as $blogs)
    <div class="col-4 themed-grid-col" style="margin-bottom: 10px">
            <div class="card">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                <div class="card-body">
                <h5 class="card-title">{{ $blogs->title }}</h5>
                <p class="card-text">{{ $blogs->slug}}</p>
                <a href="{{ route('Blog.show', ['slug'=> $blogs->slug, 'id' => $blogs->id]) }}" class="btn btn-primary" style="float: right; margin-right:10px">Voir +</a>
                </div>
            </div>
        
        </div>
    @endforeach

</div>
    {{$blog->links()}}

@endsection


