@extends('layout')

@section('title', $blog->title)

@section('content')
<div class="container">
  <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
    <li class="breadcrumb-item">
      <a class="link-body-emphasis" href="/fianarana/index">
        
        <img class="bi" width="16" height="16" src="/storage/blog/img/maison-web.png" alt="">
        <span class="visually-hidden">Home</span>
      </a>
    </li>
    <li class="breadcrumb-item">
      <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('Blog.index') }}" style="color:red">blog</a>
    </li>
    
    <li class="breadcrumb-item active" aria-current="page">
        {{ $blog->title }} 
    </li>
</ol>

    <div class="container">
            <h2>{{ $blog->title }}</h2>

            <h3>Sampana: {{$blog->category}}</h3>

            <p style="text-align: justify">{{$blog->content}}</p>

            @if($blog->image)
                <div>
                    <img src="/storage/{{$blog->image}}" alt="{{$blog->title}}">
                </div>
            @endif


    </div>

</div>


@endsection