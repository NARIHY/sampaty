@extends('showLayout')

@section('title', $maitso->title)
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
      <a class="link-body-emphasis" href="{{route('Sampana.index')}}">
        Sampana
      </a>
    </li>
    <li class="breadcrumb-item">
      <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('Sampana.maitso') }}" style="color:red">Sampana maitso</a>
    </li>
    
    <li class="breadcrumb-item active" aria-current="page">
        {{ $maitso->title }} 
    </li>
</ol>

    <div class="container">
            <h2>{{ $maitso->title }}</h2>

            <h3>Sampana: {{$maitso->category}}</h3>

            <p style="text-align: justify">{{$text->filtre($maitso->content)}}</p>

            <div class="row mb-3 text-center">
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$maitso->image}}" alt="{{$maitso->title}}" width="100%">

              </div>
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$maitso->image_2}}" alt="{{$maitso->title}}" width="100%">
              </div>
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$maitso->image_3}}" alt="{{$maitso->title}}" width="100%">
              </div>
             
            </div>
             
              
            


    </div>

</div>


@endsection