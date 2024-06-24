<x-web>

    @include('menu.menu')

    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image="{{ url('public/web') }}/assets/images/dw.jpg" data-parallax-speed="0.5"
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
                                                        href="{{ url("public/$fasilitas->foto") }}">
                                                        <img class="img-responsive"
                                                            style="width:100% ; height:50%; object-fit: cover"
                                                            src="{{ url("public/$fasilitas->foto") }}"
                                                            alt="Tidak Dapat Memuat Gambar" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="image-popup-no-margins"
                                                        href="{{ url("public/$fasilitas->foto1") }}">
                                                        <img class="img-responsive"
                                                            style="width:100% ; height:50%; object-fit: cover"
                                                            src="{{ url("public/$fasilitas->foto1") }}"
                                                            alt="Tidak Dapat Memuat Gambar" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="image-popup-no-margins"
                                                        href="{{ url("public/$fasilitas->foto2") }}">
                                                        <img class="img-responsive"
                                                            style="width:100% ; height:50%; object-fit: cover"
                                                            src="{{ url("public/$fasilitas->foto2") }}"
                                                            alt="Tidak Dapat Memuat Gambar" />
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <p class="text-right">Sumber Foto :
                                            <em>{{ $fasilitas->sumber_foto }}</em>
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
                        <ul>

                            <li><a style="color: black">Alamat</a> :
                            </li>
                            <span>{{ $fasilitas->alamat }}</span>
                            <li>
                            </li>

                            {{-- <li><a style="color: black">Pengelola</a> :
                                <span>{{ $fasilitas->nama_pengelola }}</span>
                            </li> --}}
                            <li><a style="color: black">Nara Hubung</a> :
                            </li>
                            <span>{{ $fasilitas->no_pengelola }}</span>
                            <li><a style="color: black">Hari Buka</a> :
                                <span>{{ $fasilitas->hari_buka }}</span>
                            </li>
                            <li><a style="color: black">Jam Buka</a> : <span>{!! date('H:i', strtotime($fasilitas->jam_buka)) !!} -
                                    {!! date('H:i', strtotime($fasilitas->jam_tutup)) !!}</span></li>

                            <a class="btn btn-md btn-dark-outline btn-square mt-10"
                                href="{{ url("$fasilitas->link") }}" target="_blank" >Pemesanan tempat</a>

                        </ul>
                        <div class="col-md-12">
                            <h5 class="aside-title">fasilitas</h5>
                        </div>

                        <div class="col-md-12">
                            <span>{!! $fasilitas->fasilitas !!}</span>
                        </div>

                    </div>
                </div>
            </div>
            <h3 style="font-weight: 600;">{{ $fasilitas->nama }}</h3>
            <div class="post-text text-left">
                <p style="text-align: justify">
                    {{ $fasilitas->deskripsi }}
                </p>
            </div>

            <h5 class="font-20px white-color"><span class="font-100"></span><a
                    href="{{ url('desa-wisata') }} "class="btn btn-info">Halaman Utama</a><a
                    href="{{ url("fasilitas/$fasilitas->id_kategori_fasilitas") }}"class="btn btn-success">Kembali</a>
            </h5>
        </div>
    </section>
</x-web>
