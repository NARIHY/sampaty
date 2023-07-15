@extends('admin')
@section('title', 'Editer un compte')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Editer un compte</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Admin.auth.index')}}">Gestion des comptes</a></li>
            <li class="breadcrumb-item active">Editer un compte</li>
        </ol>
        </nav>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}">
            @error('name') 
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="prenon">Prenon:</label>
            <input type="text" name="prenon" id="prenon" class="form-control @error('prenon') is-invalid @enderror" value="{{$user->prenon}}">
            @error('prenon') 
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <label for="addresse">Addresse:</label>
            <input type="text" name="addresse" id="addresse" class="form-control @error('addresse') is-invalid @enderror" value="{{$user->addresse}}">
            @error('addresse') 
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror

            <div class="row mb-3 text-center">
                <div class="col-8 themed-grid-col">
                    <label for="picture" style="float: left">Modifier la photo de profile</label>
                    <input type="file" name="picture" id="picture" class="form-control @error('picture') is-invalid @enderror">
                    <div style="color:red">
                        @error('picture') {{$message}} @enderror
                    </div>
                </div>
                <div class="col-4 themed-grid-col">
                    <img src="/storage/{{ $user->picture }}" alt="" width="100%">
                </div>
                    
            </div>
            <label for="position">Rôles</label>
            <select name="position" id="position" class="form-control @error('position') is-invalid @enderror">
                <option value="">Choisir le rôle</option>
                <option value="Moderateur" @if($user->position === 'Moderateur') selected @endif>Moderateur</option>
                <option value="Administrateur"@if($user->position === 'Administrateur') selected @endif>Administrateur</option>
            </select>

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
                <input type="submit" class="btn btn-primary" value="Modifier">
            </div>
        </form>

    </div>
</section>
@endsection