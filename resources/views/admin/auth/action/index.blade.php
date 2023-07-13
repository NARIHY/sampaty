@extends('admin')

@section('title', 'Création d\'un compte')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        
        <h1>Gestion des comptes</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Admin.auth.index')}}">Gestion des comptes</a></li>
            <li class="breadcrumb-item active">création d'un compte</li>
        </ol>
        </nav>
    </div>

    <div class="container">
        @if (session('error')) 
            <div class="alert alert-danger">
                <h3 class="text-center">{{session('error')}}</h3>
            </div>
        @endif

        @if (session('success')) 
            <div class="alert alert-success">
                <h3 class="text-center">{{session('success')}}</h3>
            </div>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" value="{{ @old('name')}}">
            @error('name')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="prenon">Prénon</label>
            <input type="text" name="prenon" id="prenon" class="form-control  @error('prenon') is-invalid @enderror" value="{{ @old('prenon')}}">
            @error('prenon')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="email">Adresse e-mail</label>
            <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" value="{{ @old('email')}}">
            @error('email')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="picture">Entrer un photo de profil</label>
            <input type="file" name="picture" id="picture" class="form-control  @error('picture') is-invalid @enderror">

            <label for="genre">Genre</label>
            <select name="genre" id="genre" class="form-control">
                <option value="">Choisir un genre</option>
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
            </select>

            @error('genre')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="position">Rôles</label>
            <select name="position" id="position" class="form-control @error('position') is-invalid @enderror">
                <option value="">Choisir le rôle</option>
                <option value="Moderateur">Moderateur</option>
                <option value="Administrateur">Administrateur</option>
            </select>

            @error('position')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror
            
            <label for="password">Mots de passe:</label>
            <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror">
            @error('password')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="password_confirmation">Confirmer le mots de passe:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror
        

        <div class="d-grid gap-2" style="margin-top: 10px">
            <input type="submit" class="btn btn-primary" value="Créer">
        </div>
        </form>
    </div>
    
</section>
@endsection