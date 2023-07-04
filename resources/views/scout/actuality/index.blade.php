@extends('layout')
@section('title', 'Actualités')


@section('content')
    @php 
    $actualities = App\Models\Actuality::latest()->first();
    $formatedText = new App\Models\Text();
    @endphp
    @if($actualities)
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="/storage/{{$actualities->picture}}" width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>{{ $actualities->title}}</h1>
                <p>{{ $actualities->description}}</p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/storage/{{$actualities->picture_2}}" width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>{{ $actualities->title}}</h1>
                <p>{{ $actualities->description}}</p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="/storage/{{$actualities->picture_3}}" width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>{{ $actualities->title}}</h1>
                <p>{{ $actualities->description}}</p>
                
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    @endif
    <div class="container">
        
        @foreach($actuality as $actu)

        <section id="about" class="about">
            <div class="container aos-init aos-animate" data-aos="fade-up">
      
              <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                  <!--Injectena caroussel eto-->

                  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <img src="/storage/{{$actu->picture}}" width="100%" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                        <div class="container">
                          <div class="carousel-caption text-start">                           
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/storage/{{$actu->picture_2}}" width="100%" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                        <div class="container">
                          <div class="carousel-caption">
                       </div>
                        </div>
                      </div>
                      <div class="carousel-item active">
                        <img src="/storage/{{$actu->picture_3}}" width="100%" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                        <div class="container">
                          <div class="carousel-caption text-end">                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--fin carousselle-->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                  <h3 style="color:red;">{{$actu->title}}</h3>
                  <p class="fst-italic" style="text-align: justify">
                    {{ $formatedText->excerpt($actu->content)}}
                  </p>
                  <div class="d-grid gap-2">
                    <a href="{{ route('Blog.actuShow', ['title'=> $actu->title, 'id' => $actu->id]) }}" class="btn btn-primary">Voir +</a>
                  </div>
                </div>
              </div>
      
            </div>
          </section>
        @endforeach
    </div>
@endsection

