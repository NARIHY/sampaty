@extends('admin')

@section('title', 'tous nos information')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Nos informations</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Nos  informations</li>  
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
                <th scope="col">titre</th>
                
                <th scope="col">publié par</th>
                <th scope="col">publié le</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
         
                
          
                
            @forelse($propos as $information)
            <tbody>
            <tr>
                <th scope="row">{{$information->id}}</th>
                <td>{{$information->title}}</td>
                
                <td>{{$information->posted_by}}</td>
                <td> {{$information->created_at->format('d M Y')}} </td>
                <td>
                    <div class="row mb-3 text-center">
                        <div class="col-6 themed-grid-col"> 
                            <a href="{{ route('Admin.information.modify', ['id'=> $information->id]) }}" class="btn btn-primary" >Editer</a>
                        </div>
                        <div class="col-6 themed-grid-col">
                            <form action="{{ route('Admin.information.delete', ['id'=> $information->id])}}" method="post">
                                @csrf 
                                @method("DELETE")
                                <input type="submit" value="Suprimer" class="btn btn-danger">
                            </form>
                        </div>
                        
                    </div>
                    
                     

                   
                </td>
            </tr>
            @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h2 class="text-center" style="color: red"> Aucune information pour le moment</h2></td>
                <td></td>
                <td></td>
            </tr>
           
           
            
            </tbody>
            
            @endforelse
        </table>
        <div class="container">
            {{$propos->links()}}
        </div>
    </div>
</section>

@endsection