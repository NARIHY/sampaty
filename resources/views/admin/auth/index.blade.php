@extends('admin')

@section('title', 'Gestion des compte')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <a href="{{route('Admin.auth.create')}}" class="btn btn-success" style="float: right">Ajouter un compte</a>
        <h1>Gestion des comptes</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">gestion des comptes</li>
        </ol>
        </nav>
    </div>

    <div class="container">
        @if (session('success')) 
            <div class="alert alert-success">
                <h3 class="text-center">{{session('success')}}</h3>
            </div>
        @endif
        <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">Email</th>
                <th scope="col">Rôles</th>
                
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row" style="color:red">{{$user->id}}</th>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->position}}</td>
                        
                        <td>
                            <div class="row mb-3 text-center">
                                <div class="col-6 themed-grid-col"> 
                                    <a href="{{route('Admin.modify.compte', ['id' => $user->id])}}" class="btn btn-primary" style="float:left">Editer</a>
                                </div>
                                <div class="col-6 themed-grid-col">
                                    <form action="{{route('Admin.auth.delete', ['id' => $user->id])}}" method="post">
                                        @csrf 
                                        @method("DELETE")
                                        <input type="submit" value="Suprimer" class="btn btn-danger" style="float:right">
                                    </form>
                                </div>
                            </div>
                        </td>
                        
                        
                    </tr>
                @endforeach
              
            </tbody>
          </table>

    </div>
</section>
@endsection