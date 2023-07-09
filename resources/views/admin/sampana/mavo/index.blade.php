@extends('admin')

@section('title', 'Sampana Mavo')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Sampana Mavo</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Sampana Mavo</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <div class="container">
            <table class="table table-borderless datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">titre</th>
                    <th scope="col">Info</th>
                    <th scope="col">publié par</th>
                    <th scope="col">publié le</th>
                    <th scope="col" style="float:right">Action</th>
                </tr>
                </thead>
             
                    
              
                    
               
                <tbody>
                @forelse($mavo as $mavos)
                <tr>
                    <th scope="row">{{$mavos->id}}</th>
                    <td>{{$mavos->title}}</td>
                    <td>{{$mavos->info}}</td>
                    <td>{{$mavos->posted_by}}</td>
                    <td> {{$mavos->created_at->format('d M Y')}} </td>
                    <td>
                        <div class="row mb-3 text-center">
                            <div class="col-6 themed-grid-col"> 
                                <a href="{{ route('Admin.sampana.mavo.modify', ['id' => $mavos->id])}}" class="btn btn-primary" style="float:right">Editer</a>
                            </div>
                            <div class="col-6 themed-grid-col">
                                <form action="" method="post">
                                    @csrf 
                                    @method("DELETE")
                                    <input type="submit" value="Suprimer" class="btn btn-danger" style="float:right">
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
                    <td><h2 class="text-center" style="color: red"> Aucune publication pour le moment</h2></td>
                    <td></td>
                    <td></td>
                </tr>
               
               
                
                
                
                @endforelse
            </tbody>
            </table>
            <div class="container">
                {{$mavo->links()}}
            </div>
        </div>
    </div>
</section>
@endsection