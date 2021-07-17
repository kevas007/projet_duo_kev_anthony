<div class="hero background-overlay">
    <div class="hero-text">
        @foreach ($homeStatics as $homeStactic)

            <h1>{{ $homeStactic->titre }}</h1>
    </div> <!-- /.hero-text -->
    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div><!-- /.hero-arrow -->

</div><!-- /.hero -->

<main id="main" class="site-main">

    <section class="site-section section-quote text-center">


        <div class="container">

            <p class="quote">{{ $homeStactic->para }}</p>
            <p class="quote-owner yellow-text">{{ $homeStactic->lien }}</p>

        </div>

    </section><!-- /.section-quote -->
    @endforeach
    <section class="section-we-are-creative">

        <div class="container-fluid">

            <div class="row">

                @foreach ($sectionHomeStatics as $sectionHomeStatic )


                <div class="col-sm-6 hidden-xs">
                    <img class="img-carousel" src="{{ asset('assets/img/'.$sectionHomeStatic->image) }}"
                        alt="We are creative">
                </div>

                <div class="col-sm-6 project yellow-bg">

                    <div class="project-content">

                        <h3 class="section-title">{{ $sectionHomeStatic->titre}}</h3>
                        <p class="small-title mb-30">{{ $sectionHomeStatic->para }}</p>
                        <a href="#" class="white-text">{{ $sectionHomeStatic->lien }}</a>
                        @endforeach
                    </div> <!-- /.project-content-->

                </div>

            </div>

        </div>

    </section><!-- /.section-we-are-creative -->

    <section class="site-section-small section-services">

        <div class="container">



            <div class="text-center">

                <h3 class="section-title">{{ $homeTitreStats[0]->titre }}</h3>
                <p class="section-text">{{ $homeTitreStats[0]->para }}</p>

            </div>


            <div class="row">
                @foreach ( $homeDynamiques as $homeDynamique )
                <div  id="forech" class="col-sm-5 col-sm-offset-1 col-xs-6 mt-2">
                    <div class="service mt-5">

                        <div class="service-icon mt-5">
                            {!! $homeDynamique->i1_service !!}
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homeDynamique -> h4_1_service }}</h4>
                            <p>{{ $homeDynamique->p1_service }}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->
                    {{-- <div class="service  mt-2">

                        <div class="service-icon">
                            <i class="{{ $homeDynamique->i1_service }}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homeDynamique -> h4_1_service }}</h4>
                            <p>{{ $homeDynamique->p1_service }}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service --> --}}


                </div>
                    @endforeach
                </div>

            </div>

            @foreach ($icones as $icone)

            @endforeach

    </section><!-- /.section-services -->

    <section class="site-section-small section-work-with-us yellow-bg text-center">

        <div class="container">

            <p class="section-title-small white-text mb-50">{{ $homeTitreStats[1]->titre }}</p>
            <a class="btn" href="#">{{ $homeTitreStats[1]->para }}</a>

        </div>

    </section><!-- /.section-work-with-us -->


