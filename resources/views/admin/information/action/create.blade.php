@extends('admin')

@section('title', 'Bloguer')

@section('content')

<section class="section dashboard">
    <div class="pagetitle">
        <h1>Ajouter une information</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Ajouter une information</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>
            
            <label for="image">Ajouter un image</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            <div style="color:red">
                @error('picture') {{$message}} @enderror
            </div>

            <label for="image_2">Ajouter une deuxièème image</label>
            <input type="file" name="image_2" id="image_2" class="form-control @error('image_2') is-invalid @enderror">
            <div style="color:red">
                @error('image_2') {{$message}} @enderror
            </div>

            <label for="content">Contenu</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror"></textarea>
            <div style="color:red">
                @error('content') {{$message}} @enderror
            </div>

            <div class="d-grid gap-2" style="margin-top: 10px">
                <input type="submit" class="btn btn-primary" value="Ajouter">
            </div>
        </form>

    </div>
</section>

@endsection