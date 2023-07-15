@extends('admin')

@section('title', 'Bloguer')

@section('content')

<section class="section dashboard">
    <div class="pagetitle">
        <h1>Bloguer</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Bloguer</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{@old('title')}}">
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>

            <label for="slug">Slogan</label>
            <input type="text" name="slug" id="slug" class="form-control @error('description') is-invalid @enderror" value="{{@old('slug')}}">
            <div style="color:red">
                @error('slug') {{$message}} @enderror
            </div>
            
            <label for="image">Ajouter un image</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            <div style="color:red">
                @error('image') {{$message}} @enderror
            </div>

            <label for="picture_2">Ajouter une deuxièème image</label>
            <input type="file" name="picture_2" id="picture_2" class="form-control @error('picture_2') is-invalid @enderror">
            <div style="color:red">
                @error('picture_2') {{$message}} @enderror
            </div>

            <label for="category">sampana</label>
            <select name="category" id="category" class="form-control">
                <option value="">Selectionner un élément</option>
                @foreach($sampana as $name => $id)
                <option value="{{$name}}">{{$id}}</option>
                @endforeach
            </select>
            @error('sampana')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror 
            <label for="content">Contenu</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">
            {{@old('content')}}</textarea>
            <div style="color:red">
                @error('content') {{$message}} @enderror
            </div>

            <div class="d-grid gap-2" style="margin-top: 10px">
                <input type="submit" class="btn btn-primary" value="Bloguer">
            </div>
        </form>

    </div>
</section>

@endsection