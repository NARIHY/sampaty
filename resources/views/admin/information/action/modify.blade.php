@extends('admin')

@section('title', 'Edition d\'une information')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Edition d'une information</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Edition d'une information</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        @if (session('success')) 
        <div class="alert alert-success">
            <h3 class="text-center">{{session('success')}}</h3>
        </div>
    @endif
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$propos->title}}">
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>

            <div class="row mb-3 text-center">
                <div class="col-8 themed-grid-col">
                    <label for="image" style="float: left">Modifier l' image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{$propos->image}}">
                    <div style="color:red">
                        @error('image') {{$message}} @enderror
                    </div>

                    <label for="image_2" style="float: left; margin-top:30%">Ajouter une deuxième image</label>
                    <input type="file" name="image_2" id="image_2" class="form-control @error('image_2') is-invalid @enderror" value="{{$propos->image_2}}">
                    <div style="color:red">
                        @error('image_2') {{$message}} @enderror
                    </div>
                </div>
                <div class="col-4 themed-grid-col">
                    <img src="/storage/{{$propos->image}}" alt="" width="100%">
                    <img src="/storage/{{$propos->image_2}}" alt="" width="100%" style="margin-top:10px">
                </div>
                    
            </div>

            <label for="content">Contenu</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{$propos->content}}</textarea>
            <div style="color:red">
                @error('content') {{$message}} @enderror
            </div>

            <div class="d-grid gap-2" style="margin-top: 10px">
                <input type="submit" class="btn btn-primary" value="modifier">
            </div>
        </form>

    </div>
</section>

@endsection