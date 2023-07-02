@extends('layout')
@section('title', 'Scout')

@section('content')

    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      
      <h1>Donner aux jeunes  <br> les compétences et <br> les moyens de créer <br>un monde meilleur</h1>
      <a href=" {{ route('Blog.index')}}" class="btn-get-started">Commencer à visiter</a>
    </div>
  </section>
  
  <div class="container">
  <main id="main">

<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="{{asset('img/news/chef.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3 class="orange">Rindra andrian</h3>
        <p class="soratra"> Le scoutisme est l'endroit où j'ai appris à surmonter ma propre force, mon esprit et mes émotions : le scoutisme est une école de la vie. Dans le scoutisme j'ai affronté : la honte, la peur, la fatigue. Quand vous pensez que c'est la limite, c'est là que commence la chose la plus délicieuse. Le Scoutisme m'a appris à servir Dieu et à aimer mon pays : c'est la base que M. Baden Powell a voulu transmettre. Il n'y a pas de meilleure vie que de servir Dieu, d'aider ses amis et d'aimer son pays. Mais est-ce que ça veut dire que je vais me mépriser ? Non, vous ne pouvez pas vraiment aimer les autres tant que vous n'avez pas appris à "vous aimer".</p>
        
        

      </div>
    </div>

  </div>
</section>
<section id="counts" class="counts section-bg">
  <div class="container">

    <div class="row counters">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="10000000" data-purecounter-duration="1" class="purecounter"></span>
        <p>MONDIALE</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="200000" data-purecounter-duration="1" class="purecounter"></span>
        <p>AFRICAINE</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="100000" data-purecounter-duration="1" class="purecounter"></span>
        <p>MADAGASCAR</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="101" data-purecounter-duration="1" class="purecounter"></span>
        <p>X e B</p>
      </div>

    </div>

  </div>
</section>

<div class="container">
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{asset('img/acc/Tsiparampitariha.jpg')}}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Tsipara mpitariha</h4>
            <span>Mpiandraikitra</span>
            <p>
            "Etre membre scout nous donne un bon privilège, vous apprènne à mieux connaitre le monde y compris vous même."
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{asset('img/acc/mianja.jpg')}}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Mianja RAZAFIMANDIMBY</h4>
            <span>Mpiandraikitra</span>
            <p>
            "Venez nous rejoindre, le scoutisme nous apprend beaucoup de chose"
            </p>
           
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{asset('img/acc/ito.jpg')}}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Zabady mazoto</h4>
            <span>Beazina</span>
            <p>
            "Le scoutisme nous rend heureux, qu'est-ce-que vous attendez pour nous rejoindre"
            </p>
            
          </div>
        </div>
      </div>

    </div>

    <div class="container" data-aos="fade-up">
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        
        <h1 style="color:red;">Nous contacter</h1>
        @if(session('success'))
            <div class="alert alert-success" >
                <p class="text-center">{{ session('success')}}</p>
            </div>
        @endif

        <form action="" method="post">
          @csrf
          <label for="nom">Votre nom</label>
          <input type="text" name="nom" class="form-control "  value="">
          @error('nom')
          <p style="color:red">
            {{ $message}}
          </p>
          @enderror
          <label for="prenon">Votre prénon</label>
          
          <input type="text" name="prenon" class="form-control "  value="">  
          @error('prenon')
          <p style="color:red">
            {{ $message}}
          </p>
          @enderror
          <label for="email">Votre addresse email</label>
          
          <input type="email" name="email" class="form-control "  value="">  
          @error('email')
          <p style="color:red">
            {{ $message}}
          </p>
          @enderror
          <label for="message">Votre message</label>
          <textarea name="message" class="form-control " cols="30" rows="5" ></textarea>
          @error('message')
          <p style="color:red">
            {{ $message}}
          </p>
          @enderror
          <div class="d-grid gap-2">
            <input type="submit" value="Envoyer" class="btn btn-primary" style="margin-top:4px;margin-bottom:10px">

          </div>
        </form>
      </div>
  </div>  
</div>

    

  
        
          
      </div>

</section>
    </div>
    </div>
@endsection