<x-web>

    @include('menu.menu')
    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image="{{ url('public/web') }}/assets/images/1.jpg" data-parallax-speed="0.5"
        data-parallax-direction="up">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centerize-col text-center">
                    <div class="col-md-8 centerize-col">
                        <div class="all-padding-50 text-center">
                            <img src="{{ url('public/web') }}/assets/images/ekku11.png" alt=""
                                style="width:100%; height:auto; object-fit: cover; ">
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 mb-10">
                    <div class="post-wrap">
                        <div class="post-text">
                            <h3><a href="">{{ $berita->judul }}</a></h3>
                            <div class="post-time">{{ $berita->created_at->format('d F Y') }} </div>
                        </div>
                        <div class="post-img">
                            <img class="img-responsive" src="{{ url("public/$berita->poto") }}" alt="" />
                        </div>
                        <div class="post-text">
                            <p><a style="color: black"></a>
                                <span>{{ $berita->deskripsi }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <h5 class="aside-title">Berita Terbaru</h5>
                @foreach ($recent_berita as $berita)
                    <div class="col-md-4 col-xs-12">
                        <div class="sidebar_widget widget_recent_post mb-10">
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="{{ url("berita/$berita->id") }}">
                                        <img width="75" height="75" src="{{ url("public/$berita->poto") }}"
                                            class="img-responsive" alt="post-01" />
                                    </a>
                                </div>
                                <div class="post-body">
                                    <span class="font-14px"><a
                                            href="{{ url("berita/$berita->id") }}">{{ $berita->judul }}</a></span>
                                    <div class="post-time">{{ $berita->created_at->format('d F Y') }} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <h5 class="font-20px white-color"><span class="font-100"></span><a
                    href="{{ url('desa-wisata') }} "class="btn btn-info">Home Page</a><a
                    href="{{ url('kontak-wisata') }}"class="btn btn-success">Back</a>
            </h5>
        </div>
    </section>
</x-web>
