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
            <li class="breadcrumb-item active">Ajout d'une publication</li>  
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
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" >
            <div style="color:red">
                @error('title') {{$message}} @enderror
            </div>
        
                <label for="image" >ajouter un image</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror"  >
                <div style="color:red">
                    @error('image') {{$message}} @enderror
                </div>

                <label for="image_2" >ajouter une deuxième image</label>
                <input type="file" name="image_2" id="image_2" class="form-control @error('image_2') is-invalid @enderror"  >
                <div style="color:red">
                    @error('image_2') {{$message}} @enderror
                </div>

                <label for="image_3" >ajouter une troisième image</label>
                <input type="file" name="image_3" id="image_3" class="form-control @error('image_3') is-invalid @enderror"  >
                <div style="color:red">
                    @error('image_3') {{$message}} @enderror               
        </div>

        <label for="info">Choisir entre:</label>
        <select name="info" id="info" class="form-control">
            <option value="">Selectionner un élément</option>
            <option value="Tily"  >Tily</option>
            <option value="Mpanazava" >Mpanazava</option>
        </select>

        <label for="sampana">Sampana:</label>
        <select name="sampana" id="sampana" class="form-control">
            <option value="">Selectionner un élément</option>
            <option value="Mavo">Mavo</option>
            <option value="Maitso">Maitso</option>
            <option value="Mena">Mena</option>
            <option value="Menafify">Menafify</option>
        </select>

        <label for="content">Contenu</label>
        <textarea name="content" id="content" class="form-control" cols="30" rows="10">
            
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