<x-web>

    @include('menu.menu')

    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image="{{ url('public/web') }}/assets/images/d.jpg" data-parallax-speed="0.5"
        data-parallax-direction="up">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centerize-col text-center">
                    <h5 class="font-50px white-color font-800 wow fadeInUp" data-wow-delay="0.1s"><span
                            class="font-100">Eksplore Kayong Utara</span></h5>

                    <h5 class="font-20px white-color"><span class="font-100"></span><a
                            href="{{ url('desa-wisata') }}">Dashboard</a> / <a
                            href="{{ url("fasilitas/$fasilitas->id_kategori_fasilitas") }}"> Kembali</a></h5>
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

                                            <img class="img-responsive" src="{{ url("public/$fasilitas->foto") }}"
                                                style="width: 100%; height: 50%; object-fit: cover" alt="" />
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
                            <li><a style="color: black">Aktivitas</a> :
                            </li>
                            <span>{{ $fasilitas->destinasi }}</span>
                            <li><a style="color: black">Pengelola</a> :
                                <span>{{ $fasilitas->nama_pengelola }}</span>
                            </li>
                            <li><a style="color: black">Nara Hubung</a> :
                                <span>{{ $fasilitas->no_pengelola }}</span>
                            </li>
                            <li><a style="color: black">Hari Buka</a> :
                                <span>{{ $fasilitas->hari_buka }}</span>
                            </li>
                            <li><a style="color: black">Jam Buka</a> : <span>{!! date('H:i', strtotime($fasilitas->jam_buka)) !!} -
                                    {!! date('H:i', strtotime($fasilitas->jam_tutup)) !!}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 style="font-weight: 600;">{{ $fasilitas->nama }}</h3>
            <div class="post-text text-left">
                <p style="text-align: justify">
                    {{ $fasilitas->deskripsi }}
                </p>
            </div>
        </div>
    </section>
</x-web>
