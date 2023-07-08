@extends('admin')

@section('title', 'Sampana Maitso')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Sampana Maitso</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Admin.sampana')}}">Sampana</a></li>
            <li class="breadcrumb-item">Sampana maitso</li>
            <li class="breadcrumb-item active">Edition de {{$maitso->title}}</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success" >
                <p class="text-center">{{ session('success')}}</p>
            </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger" >
            <p class="text-center">{{ session('error')}}</p>
        </div>
    @endif

        <form action="" method="post" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$maitso->title}}">
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>
        <div class="row mb-3 text-center" style="margin-top: 20px">
            <div class="col-8 themed-grid-col">
                <label for="image" style="float: left">Modifier l' image</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror"  value="{{$maitso->image}}">
                <div style="color:red">
                    @error('image') {{$message}} @enderror
                </div>

                <label for="image_2" style="float: left; margin-top:30%">Modifier la deuxième image</label>
                <input type="file" name="image_2" id="picture_2" class="form-control @error('image_2') is-invalid @enderror" value="{{$maitso->image_2}}" >
                <div style="color:red">
                    @error('image_2') {{$message}} @enderror
                </div>

                <label for="image_3" style="float: left; margin-top:30%">Modifier la troisième image</label>
                <input type="file" name="image_2" id="image_3" class="form-control @error('image_3') is-invalid @enderror"  value="{{$maitso->image_3}}">
                <div style="color:red">
                    @error('image_3') {{$message}} @enderror
                </div>
            </div>
            <div class="col-4 themed-grid-col">
                <img src="/storage/{{$maitso->image}}" alt="" width="100%">
                <img src="/storage/{{$maitso->image_2}}" alt="" width="100%" style="margin-top:10px">
                <img src="/storage/{{$maitso->image_3}}" alt="" width="100%" style="margin-top:10px">
            </div>
                
        </div>

        <label for="info"></label>
        <select name="info" id="info" class="form-control">
            <option value="">Selectionner un élément</option>
            <option value="Tily"  @if($maitso->info == "Tily") selected @endif>Tily</option>
            <option value="Mpanazava" @if($maitso->info == "Mpanazava") selected @endif>Mpanazava</option>
        </select>

        <label for="content">Contenu</label>
        <textarea name="content" id="content" class="form-control" cols="30" rows="10">
            {{$maitso->content}}
        </textarea>
        <div style="color:red">
            @error('content') {{$message}} @enderror
        </div>

        <div class="d-grid gap-2" style="margin-top: 10px">
            <input type="submit" class="btn btn-primary" value="Editer">
        </div>
        </form>
    </div>
</section>
@endsection