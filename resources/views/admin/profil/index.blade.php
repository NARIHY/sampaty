@extends('admin')

@section('title', 'Mon profile')


@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Mon profile</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Mon profil</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card">
            <div class="text-center" style="padding: 30px;">
                <img src="/storage/{{$user->picture}}" alt="Profile" class="rounded-circle" width="200px" height="200px">
    
    
            <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                    
                      <div class="row" style="margin-top: 30px;">
                        <div class="col-lg-3 col-md-4 label "><h3 style="color: #0054A0">Nom</h3></div>
                        <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><h3 style="color: #0054A0">Prénon</h3></div>
                        <div class="col-lg-9 col-md-8">{{$user->prenon}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><h3 style="color: #0054A0">Genre</h3></div>
                        <div class="col-lg-9 col-md-8">{{$user->genre}}</div>
                      </div>
    
                      
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><h3 style="color: #0054A0">Addresse</h3></div>
                        <div class="col-lg-9 col-md-8">{{$user->addresse}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><h3 style="color: #0054A0">Email</h3></div>
                        <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><h3 style="color: #0054A0">Role</h3></div>
                        <div class="col-lg-9 col-md-8">{{$user->position}}</div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
</section>
    
@endsection