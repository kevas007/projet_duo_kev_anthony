<header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">

                <a href="index.html" class="site-title yellow-text">{{ env('APP_TITRE')}}</a>

            </div><!-- /.navbar-header -->
            @foreach ($navs as $nav )
            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="/">{{ $nav-> lien1 }}</a></li>
                    <li>
                        <a href="/blog">{{ $nav-> lien2 }} </a>
                    </li>
                    <li>
                        <a href="/portfolio">{{ $nav-> lien3 }}</a>
                    </li>
                    <li>
                        <a href="/contact">{{ $nav-> lien4 }}</a>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            @endforeach

        </div>

    </nav><!-- /.site-navigation -->

</header><!-- /#masthead -->
