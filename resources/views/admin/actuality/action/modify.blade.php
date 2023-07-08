@extends('admin')

@section('title', 'modifier une actualité')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Edition d'une actualité</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">édition d'une actualité</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$actuality->title}}">
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>

            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{$actuality->description}}">
            <div style="color:red">
                @error('description') {{$message}} @enderror
            </div>
            
            

            <div class="row mb-3 text-center">
                <div class="col-8 themed-grid-col">
                    <label for="picture" style="float:left">Modifier l' image</label>
                    <input type="file" name="picture" id="picture" class="form-control @error('title') is-invalid @enderror" value="{{$actuality->picture}}">
                    <div style="color:red">
                        @error('picture') {{$message}} @enderror
                    </div>

                    <label for="picture_2" style="float:left; margin-top:30%">Ajouter une deuxième image</label>
                    <input type="file" name="picture_2" id="picture_2" class="form-control @error('title') is-invalid @enderror" value="{{$actuality->picture_2}}">
                    <div style="color:red">
                        @error('picture_2') {{$message}} @enderror
                    </div>

                    <label for="picture_3" style="float:left; margin-top:30%">Ajouter une troisième image</label>
                    <input type="file" name="picture_3" id="picture_3" class="form-control @error('title') is-invalid @enderror" value="{{$actuality->picture_3}}">
                    <div style="color:red">
                        @error('picture_3') {{$message}} @enderror
                    </div>

                </div>
                <div class="col-4 themed-grid-col">
                    <img src="/storage/{{$actuality->picture}}" alt="" width="100%">
                    <img src="/storage/{{$actuality->picture_2}}" alt="" width="100%" style="margin-top:10px">
                    <img src="/storage/{{$actuality->picture_3}}" alt="" width="100%" style="margin-top:10px">
                </div>
                
            </div>

            <label for="sampana">sampana</label>
              
            <select name="sampana" id="sampana" class="form-control">
                
                <option value="">Selectionner un élément</option>
                @foreach($sampana as $name => $id)
                
                <option value="{{$name}}" @if($actuality->sampana == $name) selected @endif>{{$id}}</option>
                @endforeach
            </select>

            <label for="content"></label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{$actuality->content}}</textarea>
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