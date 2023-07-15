@extends('admin')

@section('title', 'Ajouter une nouvelle actualité')

@section('content')

<section class="section dashboard">
    <div class="pagetitle">
        <h1>Ajout d'une nouvelle actualité</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">ajouter une nouvelle actualité</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{@old('title')}}">
            <div class="is-invalid">
                @error('title') {{$message}} @enderror
            </div>

            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{@old('description')}}">
            <div class="is-invalid">
                @error('description') {{$message}} @enderror
            </div>
            
            <label for="picture">Ajouter un image</label>
            <input type="file" name="picture" id="picture" class="form-control @error('picture') is-invalid @enderror">
            <div class="is-invalid">
                @error('picture') {{$message}} @enderror
            </div>

            <label for="picture_2">Ajouter une deuxièème image</label>
            <input type="file" name="picture_2" id="picture_2" class="form-control @error('picture_2') is-invalid @enderror">
            <div class="is-invalid">
                @error('picture_2') {{$message}} @enderror
            </div>

            <label for="picture_3">Ajouter un image</label>
            <input type="file" name="picture_3" id="picture_3" class="form-control @error('picture_3') is-invalid @enderror">
            <div class="is-invalid">
                @error('picture_3') {{$message}} @enderror
            </div>

            <label for="sampana">sampana</label>
            <select name="sampana" id="sampana" class="form-control">
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

            <label for="content"></label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">
            {{@old('content')}}
            </textarea>
            <div class="is-invalid">
                @error('content') {{$message}} @enderror
            </div>

            <div class="d-grid gap-2" style="margin-top: 10px">
                <input type="submit" class="btn btn-primary" value="Ajouter">
            </div>
        </form>

    </div>
</section>

@endsection