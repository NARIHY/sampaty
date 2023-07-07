@extends('admin')

@section('title', 'Voici tous nos membres')

@php 
use App\Models\Andraikitra;
use App\Models\Sampana;
@endphp

@section('content')
    <section class="section dashboard">
        <div class="pagetitle">
            <a href="{{route('Admin.ajouterMembre')}}" class="btn btn-success" style="float: right">Ajouter un membre</a>
            <h1>Liste de tous nos membres</h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Liste de tous nos membres</li>
            </ol>
            </nav>
        </div>

        <div class="container">
            <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">Prénon</th>
                    <th scope="col">Surnon</th>
                    <th scope="col">Status</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Sampana</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($membre as $membres)
                        <tr>
                            <th scope="row" style="color:red">{{$membres->id}}</th>
                            <td>{{ $membres->nom}}</td>
                            <td>{{ $membres->prenon}}</td>
                            <td>{{ $membres->surnon}}</td>
                            @php
                                $a = Andraikitra::findOrFail($membres->andraikitra);
                                $sp = Sampana::findOrFail($membres->sampana);
                            @endphp
                            <td>{{ $a->name}}</td>
                            <td>{{ $membres->addresse}}</td>
                            <td>{{ $sp->name}}</td>
                            <td>
                                <a href="{{ route('Admin.message.modify', ['id'=> $membres->id, 'nom' => $membres->nom]) }}" class="btn btn-primary">Modifier</a>
                            </td>
                            
                            
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>

        </div>
    </section>
@endsection