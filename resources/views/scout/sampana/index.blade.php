@extends('layout')

@section('title', 'sampana')
@php 
    $text = new App\Models\Text();
@endphp
@section('content')
<div class="container">
    <div>
        <section id="events" class="events">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <h1 style="color: #EFC100">Sampana mavo</h1>     
              <div class="row">
                @foreach($mavo as $mavos)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="/storage/{{$mavos->image}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$mavos->title}}</h5>
                      <p class="fst-italic text-center">{{$mavos->created_at}}</p>
                      <p class="card-text">{{$text->miniExcerpt($mavos->content)}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div> 
                <div class="text-center">
                    <a href="{{ route('Sampana.mavo')}}" class="btn btn-warning" >Voir plus</a>

                </div>    
            </div>
          </section>
        
    </div>

    <div>  
        <section id="events" class="events">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <h1 style="color: #00911b">Sampana maitso</h1>
              <div class="row">
                @foreach($maitso as $maitsos)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="/storage/{{$maitsos->image}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$maitsos->title}}</h5>
                      <p class="fst-italic text-center">{{$maitsos->created_at}}</p>
                      <p class="card-text">{{$text->miniExcerpt($maitsos->content)}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>   
                <div class="text-center">
                    <a href="{{ route('Sampana.maitso')}}" class="btn btn-success" >Voir plus</a>

                </div> 
            </div>
        </section>
    </div>

    <div>

        <section id="events" class="events">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <h1 style="color: #EF0012">Sampana mena</h1>
              <div class="row">
                @foreach($mena as $menas)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="/storage/{{$menas->image}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$menas->title}}</h5>
                      <p class="fst-italic text-center">{{$menas->created_at}}</p>
                      <p class="card-text">{{$text->miniExcerpt($menas->content)}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
                <div class="text-center">
                    <a href="{{ route('Sampana.mena')}}" class="btn btn-danger" >Voir plus</a>

                </div>
      
            </div>
        </section>
    </div> 

    <div>       
        <section id="events" class="events">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <h1 style="color: #6D071A">Menafify</h1>
              <div class="row">
                @foreach($menafify as $menafifies)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="/storage/{{$menafifies->image}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$menafifies->title}}</h5>
                      <p class="fst-italic text-center">{{$menafifies->created_at}}</p>
                      <p class="card-text">{{$text->miniExcerpt($menafifies->content)}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="text-center">
                    <a href="{{ route('Sampana.menafify')}}" class="btn btn-danger" >Voir plus</a>

              </div>
      
            </div>
        </section>
    </div>
</div>
@endsection