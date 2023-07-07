@extends('admin')

@section('title', 'Actualité')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Liste de tous nos membres</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Liste de tous nos actualité</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">description</th>
                <th scope="col">publié par</th>
                <th scope="col">publié le</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($actuality as $actu)
            <tbody>
            <tr>
                <th scope="row">{{$actu->id}}</th>
                <td>{{$actu->title}}</td>
                <td>{{$actu->description}}</td>
                <td>{{$actu->posted_by}}</td>
                <td> {{$actu->created_at->format('d M Y')}} </td>
                <td>
                    <div class="row mb-3 text-center">
                        <div class="col-6 themed-grid-col">   
                            <a href="#" class="btn btn-primary" >Modifier</a>
                        </div>
                        <div class="col-6 themed-grid-col">
                            <a href="#" class="btn btn-danger">Suprimer</a>
                        </div>
                        
                    </div>
                    
                     

                   
                </td>
            </tr>
            
            </tbody>
            @endforeach
        </table>
        <div class="container">
            {{$actuality->links()}}
        </div>
    </div>
</section>

@endsection