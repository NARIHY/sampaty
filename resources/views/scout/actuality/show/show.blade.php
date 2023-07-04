@extends('showLayout')

@section('title', $actuality->title)

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
              <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('Blog.actualite') }}" style="color:blue">Actualités</a>
            </li>
            
            <li class="breadcrumb-item active" aria-current="page">
                {{ $actuality->title }} 
            </li>
        </ol>
        <div>
            <h1 style="color: red">{{$actuality->title}}</h1>
            <p style="text-align: justify; font-family: Verdana, Geneva, Tahoma, sans-serif;"> {{$actuality->content}} </p>
            <div class="row mb-3 text-center">
                <div class="col-4 themed-grid-col"><img src="/storage/{{$actuality->picture}}" alt="{{$actuality->title}}" width="300px" height="auto"></div>
                <div class="col-4 themed-grid-col"><img src="/storage/{{$actuality->picture_2}}" alt="{{$actuality->title}}" width="300px" height="auto"></div>
                <div class="col-4 themed-grid-col"><img src="/storage/{{$actuality->picture_3}}" alt="{{$actuality->title}}" width="300px" height="auto"></div>
              </div>   
        </div>
    </div>
@endsection