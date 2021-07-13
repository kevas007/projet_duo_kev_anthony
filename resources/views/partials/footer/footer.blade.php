
    <section class="social-networks">
        @foreach ($footers  as $footer)
        <div class="container-fluid">

            <div class="row">

                <a class="white-text black-bg twitter-bg" href="#">{!! $footer->i_1 !!}</a>
                <a class="white-text gray-bg facebook-bg" href="#"><{!! $footer->i_2 !!}</a>
                <a class="white-text black-bg google-plus-bg" href="#">{!! $footer->i_3 !!}</a>
                <a class="white-text gray-bg message-bg" href="#">{!! $footer->i_4 !!}</a>

            </div>

        </div>

    </section><!-- /.social-networks -->

    <footer id="colophon" class="site-footer">

        <div class="container">

            <div class="email">
                <a href="mailto:hello@businessperfect.com">{{ $footer->email }}</a>
            </div><!-- /.email -->

            <div class="row">

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <a href="index.html" class="site-title yellow-text">{!! $footer->titre1 !!}</a>
                        <p class="mb-0">{{ $footer->paragraphe }}</p>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">{!! $footer->titre2 !!}</h4>
                        <ul class="list-unstyled">
                            <li>{!! $footer->li_1 !!}</li>
                            <li>{!! $footer->li_2 !!}</li>
                            <li>{!! $footer->li_3 !!}</li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">{!! $footer->titre3 !!}</h4>
                        <ul class="list-unstyled">
                            <li>{!! $footer->li_4 !!}</li>
                            <li>{!! $footer->li_5 !!}</li>
                            <li>{!! $footer->li_6 !!}</li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">{{ $footer->titre4 }}</h4>
                        <ul class="list-unstyled">
                            <li>{!! $footer->li_7 !!}</li>
                            <li>{{!!$footer->li_8 !!}</li>
                            <li>{!! $footer->li_9 !!}</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <div class="copyright">
            <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
        </div><!-- /.copyright -->

        @endforeach


    </footer><!-- /.site-footer -->
