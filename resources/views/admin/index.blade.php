@extends('admin')
@php 
$text = new App\Models\Text();
@endphp

@section('title', 'Administration')

@section('content')
    <section class="section dashboard">
        <div class="pagetitle">
            <h1>Tableau de bord</h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Admin.home')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Tableau de bord</li>
            </ol>
            </nav>
        </div>

        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
              <div class="row">
    
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">    
                    <div class="card-body">
                      <h5 class="card-title">Nombre de visite</span></h5>
    
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <img src="/storage/admin/img/enquete.png" class="fas fa-comments fa-2x text-gray-300" width="50px" height="50px" alt="">
                        </div>
                        <div class="ps-3">
                          <h6>145</h6>
                         
    
                        </div>
                      </div>
                    </div>
    
                  </div>
                </div><!-- End Sales Card -->
    
                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">
                    <div class="card-body">
                      <h5 class="card-title">Nombre de compte</h5>
    
                      <div class="d-flex align-items-center">
                        
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6>210</h6>
                        </div>
                      </div>
                    </div>
    
                  </div>
                </div><!-- End Revenue Card -->
    
                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">
    
                  <div class="card info-card customers-card">
                    <div class="card-body">
                      <h5 class="card-title">Membres</h5>
    
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                          <h6>1244</h6>
                        </div>
                      </div>
    
                    </div>
                  </div>
    
                </div><!-- End Customers Card -->
    
                <!-- Reports -->
                <div class="col-12">
                  <div class="card">
    
                    <div class="card-body">
                      <h5 class="card-title">Sampana</span></h5>
                      <div class="container">
                            <h3>Petite description sampana</h3>
                            <p style="text-align: justify">Description kely ny sampana</p>
                      </div>             
                      <p style="text-align: justify">Voici tous nos sampana:</p>
                      <ul style="margin-left: 20px">
                        @foreach($sampana as $samp)
                        <li>{{$samp->name}}</li>
                        @endforeach
                      </ul>
                      
    
                    </div>
    
                  </div>
                </div><!-- End Reports -->
    
                <!-- Recent Sales -->
                <div class="col-12">
                  <div class="card recent-sales overflow-auto">
    
                    
    
                    <div class="card-body">
                        <!-- recent -->
                      <h5 class="card-title">Information</h5>
                        <div>
                            @foreach($info as $infos)
                            <div class="row mb-3 text-center">
                                <div class="col-6 themed-grid-col">
                                    <h2 style="text-align: left">Titre</h2>
                                    <p style="text-align: justify">Contenu eto Contenu eto Contenu eto Contenu etoContenu eto Contenu eto Contenu eto Contenu eto </p>
                                </div>
                                <div class="col-6 themed-grid-col">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade pointer-event" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="/storage/{{ $infos->image}}" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="/storage/{{ $infos->image_2}}" class="d-block w-100" alt="...">
                                          </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="d-grid gap-2">
                                <a class="btn btn-primary"href="{{route('Blog.propos')}}">Voir les dernières informations</a>
                            </div>
                                
                            
                            
                        </div>
                      
    
                    </div>
    
                  </div>
                </div><!-- End Recent Sales -->
    
              </div>
            </div><!-- End Left side columns -->
    
            <!-- Right side columns -->
            <div class="col-lg-4">
    
              <!-- Recent Activity -->
              <div class="card">
                
    
                <div class="card-body">
                  <h5 class="card-title">Actualité récente:</h5>
                    @foreach($actuality as $actu)
                  <div class="activity">
                    <div >
                        <div id="carouselExampleSlidesOnly" class="carousel slide pointer-event" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="/storage/{{$actu->picture}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/storage/{{$actu->picture_2}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/storage/{{$actu->picture_3}}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                          </div>
                        
                    </div>
                    <div>
                        <h2>{{$actu->title}}</h2>
                        <p style="text-align: justify">{{$text->miniExcerpt($actu->content)}}</p>
                        <a href="{{ route('Blog.actuShow', ['title'=> $actu->title, 'id' => $actu->id]) }}" class="btn btn-primary" style="float: right">Voir +</a>
                    </div>
                    
                  </div>
                  @endforeach
    
                </div>
              </div><!-- End Recent Activity -->
    
              <!-- Budget Report -->
              <div class="card">
                <div class="card-body pb-0">
                  <h5 class="card-title">Nos blog</h5>
                    @foreach($blog as $blogs)
                        <img src="/storage/scout/scout.jpg" alt="Message de l'administrateur" width="100%">
                        <h2>{{$blogs->title}}</h2>
                        <p style="text-align: justify">
                           {{$text->excerpt($blogs->content)}}
                        </p>
                    @endforeach
                    
                  
              </div><!-- End Budget Report -->
    
            </div><!-- End Right side columns -->
    
          </div>
    </section>
        

@endsection