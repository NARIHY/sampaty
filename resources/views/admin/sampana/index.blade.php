@extends('admin')

@section('title', 'Nos sampana')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Nos sampana</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Nos sampana</li>  
        </ol>
        </nav>
    </div>
    <div class="container">

        @if (session('success')) 
            <div class="alert alert-success">
                <h3 class="text-center">{{session('success')}}</h3>
            </div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                
                <th scope="col" style="float: right">Action</th>
            </tr>
            </thead>
         
                
          
                
            @forelse($sampana as $sampanas)
            <tbody>
            <tr>
                <th scope="row">{{$sampanas->id}}</th>
                <td>{{$sampanas->name}}</td>
                
                <td>
                    <a href="{{ route('Admin.sampana.view', ['id'=> $sampanas->id]) }}" class="btn btn-primary" style="float: right">Voir</a>
                </td>
            </tr>
            @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h2 class="text-center" style="color: red"> Aucun sampana inscri pour le moment</h2></td>
                <td></td>
                <td></td>
            </tr>
           
           
            
            </tbody>
            
            @endforelse
        </table>
    </div>
</section>
    
@endsection