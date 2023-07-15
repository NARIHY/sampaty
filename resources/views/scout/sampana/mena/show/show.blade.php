@extends('showLayout')

@section('title', $mena->title)
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
        <span class="visually-hidden">Sampana</span>
      </a>
    </li>
    <li class="breadcrumb-item">
      <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('Sampana.mena') }}" style="color:red">Sampana mena</a>
    </li>
    
    <li class="breadcrumb-item active" aria-current="page">
        {{ $mena->title }} 
    </li>
</ol>

    <div class="container">
            <h2>{{ $maitso->title }}</h2>

            <h3>Sampana: {{$mena->category}}</h3>

            <p style="text-align: justify">{{$text->filtre($mena->content)}}</p>

            <div class="row mb-3 text-center">
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$mena->image}}" alt="{{$mena->title}}" width="100%">

              </div>
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$mena->image_2}}" alt="{{$mena->title}}" width="100%">
              </div>
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$mena->image_3}}" alt="{{$mena->title}}" width="100%">
              </div>
             
            </div>
             
              
            


    </div>

</div>


@endsection