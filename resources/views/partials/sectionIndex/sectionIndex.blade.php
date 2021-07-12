
    <div class="hero background-overlay">
        
    @foreach ($homeStatics  as $homeStactic  )
    <div class="hero-text">
        <h1>{{ $homeStactic->titreHome }}</h1>
    </div> <!-- /.hero-text -->
    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div><!-- /.hero-arrow -->

</div><!-- /.hero -->

<main id="main" class="site-main">

    <section class="site-section section-quote text-center">

        <div class="container">

            <p class="quote">{{ $homeStactic -> para1 }}</p>
            <p class="quote-owner yellow-text">{{ $homeStactic -> para2 }}</p>

        </div>

    </section><!-- /.section-quote -->

    <section class="section-we-are-creative">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6 hidden-xs">
                    <img class="img-carousel" src="{{ asset('assets/img/we-are-creative.jpg') }}" alt="We are creative">
                </div>

                <div class="col-sm-6 project yellow-bg">

                    <div class="project-content">

                        <h3 class="section-title">{{ $homeStactic -> sous_titre1 }}</h3>
                        <p class="small-title mb-30">{{ $homeStactic -> para3 }}</p>
                        <a href="#" class="white-text">{{ $homeStactic -> ahref }}</a>

                    </div> <!-- /.project-content-->

                </div>

            </div>

        </div>

    </section><!-- /.section-we-are-creative -->

    <section class="site-section-small section-services">

        <div class="container">

            <div class="text-center">

                <h3 class="section-title">{{ $homeStactic -> sous_titre2 }}</h3>
                <p class="section-text">{{ $homeStactic -> para4 }}</p>

            </div>
    @endforeach

                <div class="row">

                @foreach ($homeDynamiques as $homeDynamique )
                <div class="col-sm-5 col-sm-offset-1 col-xs-6">

                    <div class="service">

                        <div class="service-icon">
                            <i class=" {{ $homeDynamique -> i1_service}}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title"> {{ $homeDynamique -> h4_1_service}}</h4>
                            <p> {{ $homeDynamique -> p1_service}}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                    <div class="service">

                        <div class="service-icon">
                            <i class="{{ $homeDynamique -> i2_service}}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homeDynamique -> h4_2_service}}e</h4>
                            <p>{{ $homeDynamique -> p2_service}}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                </div>

                <div class="col-sm-5 col-xs-6">

                    <div class="service">

                        <div class="service-icon">
                            <i class="{{ $homeDynamique -> i3_service}}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homeDynamique -> h4_3_service}}</h4>
                            <p>{{ $homeDynamique -> p3_service}}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                    <div class="service">

                        <div class="service-icon">
                            <i class="{{ $homeDynamique -> i4_service}}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homeDynamique -> h4_4_service}}</h4>
                            <p>{{ $homeDynamique -> p4_service}}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                </div>

            </div>

        </div>

    </section><!-- /.section-services -->

    <section class="site-section-small section-work-with-us yellow-bg text-center">

        <div class="container">

            <p class="section-title-small white-text mb-50">{{ $homeDynamique -> p5_service}}</p>
            <a class="btn" href="#">{{ $homeDynamique -> ahref_service}}</a>

        </div>

    </section><!-- /.section-work-with-us -->

                @endforeach
        <section class="social-networks">

            <div class="container-fluid">

                <div class="row">

                    <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                </div>

            </div>

        </section><!-- /.social-networks -->
