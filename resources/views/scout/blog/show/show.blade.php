@extends('showLayout')

@section('title', $blog->title)

@php 
  $text = new App\Models\Text();
@endphp
@section('content')
<div class="container">
  <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
    <li class="breadcrumb-item">
      <a class="link-body-emphasis" href="{{route('home')}}">
        
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
      @php
      $sampana = App\Models\Sampana::findOrFail($blog->category) 
      @endphp
            <h3>{{$sampana->name}}</h3>

            <p style="text-align: justify">{{$text->filtre($blog->content)}}</p>

            <div class="row mb-3 text-center">
              <div class="col-6 themed-grid-col">
                <img src="/storage/{{$blog->image}}" alt="{{$blog->title}}" width="100%">

              </div>
              <div class="col-6 themed-grid-col">
                <img src="/storage/{{$blog->picture_2}}" alt="{{$blog->title}}" width="100%">
              </div>
             
            </div>
             
              
            


    </div>

</div>


@endsection