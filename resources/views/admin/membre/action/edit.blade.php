@extends('admin')
@section('title', 'Edition d\'un membre')

@php 
    $value ??= '';
@endphp
@section('content')
    <div class="pagetitle">
        <h1>Liste de tous nos membres</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Admin.membre')}}">Membre</a></li>
            <li class="breadcrumb-item active">Editer un membre</li>
        </ol>
        </nav>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success" >
                <p class="text-center">{{ session('success')}}</p>
            </div>
        @endif
        <form action="" method="post">
            @csrf
            @method('PUT')
            
            <label for="nom">Nom:</label>
            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{$membre->nom}}">
            @error('nom')
            <p style="color:red">
                {{ $message}}
            </p>
             
            @enderror
            <label for="prenon">Prénon:</label>
            <input type="text" class="form-control @error('prenon') is-invalid @enderror" name="prenon" id="prenon" value="{{$membre->prenon}}">
            @error('prenon')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <label for="surnon">Surnon</label>
            <input type="text" class="form-control @error('surnon') is-invalid @enderror" name="surnon" id="surnon" value="{{$membre->surnon}}">
            @error('surnnon')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <label for="birthday">Date d'anniversaire</label>
            <input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" id="birthday" value="{{date('Y-m-d',strtotime($membre->birthday)) }}">
            @error('birthday')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <label for="age">Age</label>
            <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age" value="{{$membre->age}}">
            @error('age')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <label for="addresse">Addresse</label>
            <input type="text" class="form-control @error('addresse') is-invalid @enderror" name="addresse" id="addresse" value="{{$membre->addresse}}">
            @error('addresse')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <label for="sampana">sampana</label>
              
            <select name="sampana" id="sampana" class="form-control">
                
                <option value="">Selectionner un élément</option>
                @foreach($sampana as $name => $id)
                
                <option value="{{$name}}" @if($membre->sampana == $name) selected @endif>{{$id}}</option>
                @endforeach
            </select>

            @error('sampana')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <label for="andraikitra">Andraikitra</label>
            <select name="andraikitra" id="andraikitra" class="form-control">
                <option value="">Selectionner un élément</option>
                @foreach($andraikitra as $k => $v)
                <option  value="{{$k}}" @if($membre->andraikitra == $k) selected @endif>{{$v}}</option>
                @endforeach
            </select>
            @error('andraikitra')
            <p style="color:red">
                {{ $message}}
            </p>
            @enderror  
            <div class="d-grid gap-2" style="margin-top: 10px">
                <input type="submit" class="btn btn-primary" value="Editer">
            </div>
            
        </form>
    </div>
@endsection