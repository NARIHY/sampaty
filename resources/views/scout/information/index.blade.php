@extends('layout')

@section('title', 'Information sur nous')

@php
    $text = new App\Models\Text();
@endphp

@section('content')
    <div class="container">
        <section id="about" class="about" style="margin-top: -20px">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        <h3 style="color: #692d91">Le scoutisme</h3>
                            <p style="text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif">Le scoutisme est un mouvement de jeunnesse reposant sur l'apprentissage de valeurs, telles que la solidarité, l'entraide et le respect. Son objectif est d'aider le jeune individu à former son caractère et à construire sa personnalitée tout en contribuant à son développement physique, mental et spirituelle.
                            D'autre part, le scoutisme est aussi en générale un mouvement éducatif pour les jeunes, fondé sur le volentariat, c'est un mouvement à caractère non politique, ouvert à tous, sans distiction de genre, d'origine, de race, de croyance, conformément aux but, principes et méthode tels qu'ils ont été conçu par Baden Powell, le scoutisme est fondée autour d'une loi scout et d'une prommesse unniverselle commune à tous les scouts
                            </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        
                    <img src="/storage/scout/scout.jpg" class="img-fluid" alt="scoutisme"> 
                    </div>
                </div>
            </div>           
        </section>
            <section id="about" class="about" style="margin-top: -40px">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                      <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        <img src="/storage/scout/scout.jpg" class="img-fluid" alt="scoutisme">
                      </div>
                      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">                     
                        <h3 style="color: #692d91">Le scoutisme à Madagascar</h3>
                        <p style="text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif">Le scoutisme est un mouvement de jeunnesse reposant sur l'apprentissage de valeurs, telles que la solidarité, l'entraide et le respect. Son objectif est d'aider le jeune individu à former son caractère et à construire sa personnalitée tout en contribuant à son développement physique, mental et spirituelle.
                          D'autre part, le scoutisme est aussi en générale un mouvement éducatif pour les jeunes, fondé sur le volentariat, c'est un mouvement à caractère non politique, ouvert à tous, sans distiction de genre, d'origine, de race, de croyance, conformément aux but, principes et méthode tels qu'ils ont été conçu par Baden Powell, le scoutisme est fondée autour d'une loi scout et d'une prommesse unniverselle commune à tous les scouts
                        </p>
                      </div>
                    </div>          
        </section>
        <section id="about" class="about" style="margin-top: -40px">
            <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                  <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                  <h3 style="color: #692d91">Le scoutisme chez nous</h3>
                    <p style="text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif">Le scoutisme est un mouvement de jeunnesse reposant sur l'apprentissage de valeurs, telles que la solidarité, l'entraide et le respect. Son objectif est d'aider le jeune individu à former son caractère et à construire sa personnalitée tout en contribuant à son développement physique, mental et spirituelle.
                    D'autre part, le scoutisme est aussi en générale un mouvement éducatif pour les jeunes, fondé sur le volentariat, c'est un mouvement à caractère non politique, ouvert à tous, sans distiction de genre, d'origine, de race, de croyance, conformément aux but, principes et méthode tels qu'ils ont été conçu par Baden Powell, le scoutisme est fondée autour d'une loi scout et d'une prommesse unniverselle commune à tous les scouts         
                    </p>                   
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">    
                  <img src="/storage/scout/scout.jpg" class="img-fluid" alt="scoutisme"> 
                  </div>
                </div>
            </div>           
        </section>
        
        <section style="margin-top: -50px">    
            <h2 style="color:#ef0012">Actualité locale</h2>
            <div class="row mb-3 text-center">
                @foreach($actuality as $actu)
                        <div class="col-6 themed-grid-col">          
                            <div class="card">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="/storage/{{$actu->picture}}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{$actu->title}}</h5>
                                    <p class="card-text" style="text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif">{{$text->miniExcerpt($actu->content)}}</p>
                                    <a href="{{ route('Blog.actuShow', ['title'=> $actu->title, 'id' => $actu->id])}}" class="btn btn-primary" style="float: right; margin-right:10px">Voir +</a>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="text-center" style="margin-top: 6px">
                    <a href="">Cliquer ici pour en voir plus...</a>
                </div>
            </div>
        </section>
        <section style="margin-top: -50px">    
            <h2 style="color:#ef0012">Blog</h2>
            <div class="row mb-3 text-center">
                @foreach($blog as $blogs)
                        <div class="col-6 themed-grid-col">          
                            <div class="card">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="/storage/{{ $blogs->image}}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{$blogs->title}}</h5>
                                    <p class="card-text" style="text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif">{{$text->miniExcerpt($blogs->content)}}</p>
                                    <a href="{{ route('Blog.actuShow', ['title'=> $actu->title, 'id' => $actu->id])}}" class="btn btn-primary" style="float: right; margin-right:10px">Voir +</a>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="text-center" style="margin-top: 6px">
                    <a href="">Cliquer ici pour en voir plus...</a>
                </div>
            </div>
                
        </section>

        <section style="margin-top: -50px">  
            <h2 style="color: #0041a0">Quelques informations sur nous:</h2>
            <div class="row mb-3 text-center">
                @foreach($propos as $information)
                    <h3 style="text-align: left">{{$information->title}}</h3>
                    <p style="text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif">{{$text->filtre($information->content)}}</p>
                    
                        <div class="col-6 themed-grid-col"> 
                            <img src="/storage/{{$information->image}}" alt="{{$information->title}}" width="70%">
                        </div>
                        <div class="col-6 themed-grid-col"> 
                            <img src="/storage/{{$information->image_2}}" alt="{{$information->title}}" width="70%">
                        </div>
                        
                @endforeach

                <div style="margin-top: 12px">
                    {{$propos->links()}}
                </div>
            </div>
        </section>

    </div>
@endsection