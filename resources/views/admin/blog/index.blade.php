@extends('admin')
@php 
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
@endphp
@section('title', 'Nos Blogs')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Nos blogs</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Nos blogs</li>  
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
                <th scope="col">slogan</th>
                <th scope="col">publié par</th>
                <th scope="col">publié le</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
         
                
          
                
            @forelse($blog as $blogs)
            <tbody>
            <tr>
                <th scope="row">{{$blogs->id}}</th>
                <td>{{$blogs->title}}</td>
                <td>{{$blogs->slug}}</td>
                <td>{{$blogs->posted_by}}</td>
                <td> {{$blogs->created_at->format('d M Y')}} </td>
                <td>
                    <div class="row mb-3 text-center">
                        <div class="col-6 themed-grid-col"> 
                            <a href="{{ route('Admin.blog.modify', ['id'=> $blogs->id]) }}" class="btn btn-primary" >Modifier</a>
                        </div>
                        @if($user->position === 'Administrateur')
                        <div class="col-6 themed-grid-col">
                            <form action="{{ route('Admin.blog.delete', ['id'=> $blogs->id])}}" method="post">
                                @csrf 
                                @method("DELETE")
                                <input type="submit" value="Suprimer" class="btn btn-danger">
                            </form>
                        </div>
                        @endif
                    </div>
                    
                     

                   
                </td>
            </tr>
            @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h2 class="text-center" style="color: red"> Aucun Blog pour le moment</h2></td>
                <td></td>
                <td></td>
            </tr>
           
           
            
            </tbody>
            
            @endforelse
        </table>
        <div class="container">
            {{$blog->links()}}
        </div>
    </div>
</section>

@endsection