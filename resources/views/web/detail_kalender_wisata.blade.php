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
    </section>

    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 xs-mb-50">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="single-blog-list">
                                <li>
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <div class="blog-grid-slider slick">
                                                <div class="item">
                                                    <a class="image-popup-no-margins"
                                                        href="{{ url("public/$kalender_wisata->foto") }}">
                                                        <img class="img-responsive"
                                                            style="width:100% ; height:50%; object-fit: cover"
                                                            src="{{ url("public/$kalender_wisata->foto") }}"
                                                            alt="Tidak Dapat Memuat Gambar" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="image-popup-no-margins"
                                                        href="{{ url("public/$kalender_wisata->foto1") }}">
                                                        <img class="img-responsive"
                                                            style="width:100% ; height:50%; object-fit: cover"
                                                            src="{{ url("public/$kalender_wisata->foto1") }}"
                                                            alt="Tidak Dapat Memuat Gambar" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="image-popup-no-margins"
                                                        href="{{ url("public/$kalender_wisata->foto2") }}">
                                                        <img class="img-responsive"
                                                            style="width:100% ; height:50%; object-fit: cover"
                                                            src="{{ url("public/$kalender_wisata->foto2") }}"
                                                            alt="Tidak Dapat Memuat Gambar" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-right">Sumber Foto :
                                            <em>{{ $kalender_wisata->sumber_foto }}</em>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--== Post End ==-->
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar_widget widget_archive ">

                        <h5 class="aside-title">Informasi</h5>
                        <p><a href="{{ url("$kalender_wisata->link_event") }}" class="btn btn-success" target="_blank"
                                title="Link Video Youtube" style="font-size: 7px;">
                                <i class="icofont-youtube"></i>VIDEO EVENT</a>
                        <ul>

                            <li><a style="color: black">Event</a> :
                            </li>
                            <span>{{ $kalender_wisata->event }}</span>

                            <li><a style="color: black">Deskripsi Event</a> :
                            </li>
                            <span>{{ $kalender_wisata->deskripsi_event }}</span>

                            <li><a style="color: black">Alamat</a> :
                            </li>
                            <span>{{ $kalender_wisata->tempat }}</span>

                            <li><a style="color: black">Penyelenggara Event</a> :
                            </li>
                            <span>{{ $kalender_wisata->penyelenggara_event }}</span>

                            <li><a style="color: black">Waktu Event</a> :
                                <span>{{ $kalender_wisata->tanggal }}</span>
                            </li>

                            <li><a style="color: black">Transportasi</a> :
                                <span>{{ $kalender_wisata->transportasi }}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <h3 style="font-weight: 600;">{{ $kalender_wisata->nama }}</h3>
            <div class="post-text text-left">
                <p style="text-align: justify">
                    {{ $kalender_wisata->deskripsi }}
                </p>
            </div>

            <h5 class="font-20px white-color"><span class="font-100"></span><a
                    href="{{ url('desa-wisata') }} "class="btn btn-info">Halaman Utama</a><a
                    href="{{ url('kalender-wisata') }}"class="btn btn-success">Kembali</a>
            </h5>
        </div>
    </section>
</x-web>
