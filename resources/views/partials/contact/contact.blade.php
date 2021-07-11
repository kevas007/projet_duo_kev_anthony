<div class="hero hero-max-720 hero-contact background-overlay">

    <div class="hero-text">
        @foreach ($contacStatics as $contacStatic)
            <h1 class="white-text">{{ $contacStatic-> titreContact }}</h1>
    </div><!-- /.hero-text -->

    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div><!-- /.hero-arrow -->

</div><!-- /.hero -->

<main id="main" class="site-main">

    <section class="section-contact-us">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-5 yellow-bg">

                    <div class="site-section-small">

                        <div class="get-in-touch">

                            <h2 class="section-title">{{ $contacStatic-> sous_titreContact}}</h2>
                            <p class="small-title mb-50">	{{ $contacStatic-> paraContact}}	</p>

                            @endforeach
                            @foreach ($contacdynamiques as $contactdynamique)
                                <ul class="list-unstyled mb-0">
                                    <li>{{ $contactdynamique->li_1_Contact }} </li>
                                    <li>!{$contactdynamique-> li_2_Contact}! </li>
                                    <li>{!$contactdynamique-> li_3_Contact!} </a></li>
                                    <li>{!$contactdynamique-> li4_Contact!} </li>
                                </ul>

                            @endforeach

                        </div><!-- /.get-in-touch -->

                    </div>

                </div>

                <div class="col-md-7">

                    <div class="site-section-small">

                        <form class="form-horizontal contact-form text-right">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="contact-name" placeholder="Name *"
                                        required>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" name="contact-email" placeholder="E-mail *"
                                        required>
                                </div>
                            </div>
                            <input class="form-control" type="text" name="contact-subject" placeholder="Subject">
                            <textarea class="form-control" placeholder="Message *" required></textarea>

                            <button class="btn btn-yellow">Submit</button>
                        </form><!-- /.contact-form -->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /.section-contact-us -->



    <section class="social-networks">

        <div class="container-fluid">

            <div class="row">

                <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus"
                        aria-hidden="true"></i></a>
                <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

            </div>

        </div>

    </section><!-- /.social-networks -->

</main><!-- /.site-main -->
