@extends('admin')

@section('title', 'Besoin d\'aide?')

@section('content')
<section class="section dashboard">
    <div class="pagetitle">
        <h1>Besoin d'aide?</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Besoin d'aide?</li>  
        </ol>
        </nav>
    </div>
    <div class="container">
        <h3>Etes vous en difficulté ou recontrez vous des erreurs? (bug ou autre)</h3>
        <p style="text-align: justify">Si vous ètes dans l'une de ses deux problèmes ou dans les deux, ne vous inquiétiez pas. Suivez seulement les conseils suivant:</p>
        <ol>
            <li style="color:red"> Erreur lors de la publication</li>
            <p style="text-align: justify">
            Tout d'abord, vérifier votre connexion. Si votre connexion est en 2G ou en 3G lente, çca pourrait ètre le source de votre erreur. 
            Pour rectifier cette erreur, veuillez trouver un meilleur endroit pour trouver une bonne connexion. Si le problème persiste, reconnecter vous et refaite la publication ou reconnecter vous et regarder dans la liste
            si la publication a été déjàs fait. 
            </p>
            <li style="color:red"> Erreur lors de la modification de votre compte</li>
            <p style="text-align: justify">
                L'erreur qui peut persister ici est lors de l'upload de votre photo de profil. La taille de l'image que peut supporter notre server maximale est de 
                10 000 ko ou 10 Mo. pour rectifier a l'erreur, vérifier d'abord la taille de l'image avant de l'inserer.
                Appart, l'erreur peut aussi persister au modification de votre mots de passe. pour modifier les informations sur votre compte, veuillez entrer votre mots de passe et le confirmer.      
            </p>
            <li style="color:red"> D'autre erreur concernons le site</li>
            <p style="text-align: justify">Veuillez contacter l'administrateur du site</p>

        </ol>

        <div>
            <h2 style="color:rgb(41, 41, 248)">Information sur l'administrateur</h2>
            <p>Nom: RANDRIANARISOA</p>
            <p>Prénon: Mahenina</p>
            <p>Addresse email: Maheninarandrianarisoa@gmail.com</p>
            <p>Téléphone: +261 34 12 751 02</p>
            <p>Heure de disponibilité: 04h00 - 22h00</p>
            <p>Jour de disponibilité: Lundi / Mardi / Mercredi /Jeudi / Vendredi / Samedi</p>

        </div>

    </div>
</section>
@endsection