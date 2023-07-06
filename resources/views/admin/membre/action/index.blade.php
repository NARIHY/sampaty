@extends('admin')
@section('title', 'Ajouter un nouveau membre')

@section('content')
    <div class="pagetitle">
        <h1>Liste de tous nos membres</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Admin.membre')}}">Membre</a></li>
            <li class="breadcrumb-item active">Ajout d'un membre</li>
        </ol>
        </nav>
    </div>

    <div class="container">
        <form action="" method="post">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="nom" id="nom" value="{{$membre->nom}}">
            
            <label for="prenon">Prénon:</label>
            <input type="text" class="form-control" name="prenon" id="prenon" value="{{$membre->prenon}}">
            
            <label for="surnon">Surnon</label>
            <input type="text" class="form-control" name="surnon" id="surnon" value="{{$membre->surnon}}">

            <label for="birthday">Date d'anniversaire</label>
            <input type="date" class="form-control" name="birthday" id="birthday" value="{{$membre->birthday}}">

            <label for="addresse">Addresse</label>
            <input type="text" class="form-control" name="addresse" id="addresse" value="{{$membre->addresse}}">

            <label for="sampana">sampana</label>
            <select name="sampana" id="sampana" class="form-control">
                <option value="">Selectionner un élément</option>
                @foreach($sampana as $name => $id)
                <option value="{{$name}}">{{$id}}</option>
                @endforeach
            </select>
            <label for="andraikitra">Andraikitra</label>
            <select name="andraikitra" id="andraikitra" class="form-control">
                <option value="">Selectionner un élément</option>
                @foreach($andraikitra as $k => $v)
                <option value="{{$k}}">{{$v}}</option>
                @endforeach
            </select>
            <div class="d-grid gap-2" style="margin-top: 10px">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            
        </form>
    </div>
@endsection