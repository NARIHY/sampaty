@extends('admin')

@section('title', 'Manuelle d\'utilisation du site')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Manuelle d'utilisation du site</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Manuelle d'utilisation du site</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <h1>Voici un petit tutoriels qui montre comment en utilise notre site</h1>
        <div>
            <video src="/storage/video/tutoriel.mp4" width="100%" height="auto" controls></video>
        </div>
        <p style="text-align: justify">Si vous avez des question, n'hesitez pas à contacter l'administrateur</p>
    </div>
</section>
@endsection