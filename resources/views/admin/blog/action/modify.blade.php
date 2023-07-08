@extends('admin')

@section('title', 'Edition d\'un blog')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Edition d'un blog</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Edition d'un blog</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$blog->title}}">
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>

            <label for="slug">Slogan</label>
            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{$blog->slug}}">
            <div style="color:red">
                @error('description') {{$message}} @enderror
            </div>
            <div class="row mb-3 text-center">
                <div class="col-8 themed-grid-col">
                    <label for="image" style="float: left">Modifier l' image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{$blog->image}}">
                    <div style="color:red">
                        @error('image') {{$message}} @enderror
                    </div>

                    <label for="picture_2" style="float: left; margin-top:30%">Modifier la deuxième image</label>
                    <input type="file" name="picture_2" id="picture_2" class="form-control @error('picture_2') is-invalid @enderror" value="{{$blog->picture_2}}">
                    <div style="color:red">
                        @error('picture_2') {{$message}} @enderror
                    </div>
                </div>
                <div class="col-4 themed-grid-col">
                    <img src="/storage/{{$blog->image}}" alt="" width="100%">
                    <img src="/storage/{{$blog->picture_2}}" alt="" width="100%" style="margin-top:10px">
                </div>
                    
            </div>
            
            
            


            

            <label for="category">sampana</label>
              
            <select name="category" id="category" class="form-control">
                
                <option value="">Selectionner un élément</option>
                @foreach($sampana as $name => $id)
                
                <option value="{{$name}}" @if($blog->category == $name) selected @endif>{{$id}}</option>
                @endforeach
            </select>

            <label for="content">Contenu</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{$blog->content}}</textarea>
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