@extends('layout')

@section('title', 'Blog')

@section('content')
<div class="container">
    <div class="row mb-3 text-center" style="margin-top: 10px">
    
        @foreach($blog as $blogs)
        <div class="col-4 themed-grid-col" style="margin-bottom: 10px">
                <div class="card">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="/storage/{{ $blogs->image }}" alt="">
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

</div>


@endsection


