@extends('showLayout')

@section('title', $menafify->title)
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
      <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('Sampana.menafify') }}" style="color:red">Menafify</a>
    </li>
    
    <li class="breadcrumb-item active" aria-current="page">
        {{ $menafify->title }} 
    </li>
</ol>

    <div class="container">
            <h2>{{ $maitsofify->title }}</h2>

            <h3>Sampana: {{$menafify->category}}</h3>

            <p style="text-align: justify">{{$textfify->filtre($menafify->content)}}</p>

            <div class="row mb-3 text-center">
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$menafify->image}}" alt="{{$maitso->title}}" width="100%">

              </div>
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$menafify->image_2}}" alt="{{$maitso->title}}" width="100%">
              </div>
              <div class="col-4 themed-grid-col">
                <img src="/storage/{{$menafify->image_3}}" alt="{{$maitso->title}}" width="100%">
              </div>
             
            </div>
             
              
            


    </div>

</div>


@endsection