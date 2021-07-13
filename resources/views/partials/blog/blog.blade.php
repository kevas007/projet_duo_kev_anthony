<main id="main" class="site-main">

    <section class="site-section-small section-blog">

        <div class="container">
@foreach ( $blog2 as $blogStatiques)


            <div class="text-center">

                <h1 class="section-title-big">{{$blogStatiques->blog_titre}}</h1>
                <p class="section-text">{{$blogStatiques->blog_soutitre}}</p>

            </div>

            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog</li>
            </ol><!-- /.breadcrumb -->

            <div class="row">

                <div class="col-md-9">
@foreach ( $blog as $blogs )


                    <div class="blog-post">

                        <a href="blog-post.html"><img class="img-carousel post-img" src="{{asset('assets/img/'.$blogs->blog_image)}}" alt=""></a>

                        <div class="post-content">

                            <h3><a class="post-title" href="blog-post.html">{{$blogs->blog_titre}}</a></h3>


                            <p class="section-text">{{$blogs->blog_paragraphe}}</p>

                        </div><!-- /.post-content -->

                    </div><!-- /.blog-post -->

                </div>
            </div>
        </div>
        @endforeach
    </section><!-- /.section-blog -->


</main><!-- /.site-main -->
