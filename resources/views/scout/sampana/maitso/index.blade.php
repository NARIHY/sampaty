@extends('layout')

@section('title', 'Sampana Maitso')

@section('content')
    <div class="container">
        @foreach($maitso as $maitsos)
            <section id="about" class="about">
                <div class="container aos-init aos-animate" data-aos="fade-up">
        
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        <h3>{{$maitsos->title}}</h3>
                        <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; text-align:justify">
                        {{$maitsos->content}}
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <!--Injectena caroussel eto-->

                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="/storage/{{$maitsos->image}}" width="100%" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                            <div class="container">
                            <div class="carousel-caption text-start">                           
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/{{$maitsos->image_2}}" width="100%" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                            <div class="container">
                            <div class="carousel-caption">
                        </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img src="/storage/{{$maitsos->image_3}}" width="100%" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                            <div class="container">
                            <div class="carousel-caption text-end">                           
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!--fin carousselle-->
        
                    </div>
                </div>
        
                </div>
            </section>
        @endforeach
        {{$maitso->links()}}
    </div>
@endsection