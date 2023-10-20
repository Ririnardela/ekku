<x-web>

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/2.jpg);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/kku-white.png" alt=""
                                        style="width:100%; height:auto; object-fit: cover; ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 centerize-col text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title">
                        <hr class="center_line dark-bg">
                        {{-- @foreach ($detail as $detail)
                            <p>
                                {{ $detail->nama }}
                            </p>
                        @endforeach --}}
                        <br>
                        <p>
                            Silahkan KLIK pada nama desa wisata yang tersedia untuk menemukan beragam informasi paket
                            wisata dan fasilitas pendukung lainnya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 centerize-col text-center">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <span class="font-100" font-weight:bold>TAMAN NASIONAL KABUPATEN KAYONG UTARA</span>

                        </div>
                    </div>
                </div>
                <div class="row mt-50">
                    @foreach ($list_taman as $taman)
                        <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <div class="blog-grid-slider slick">
                                        <div class="item">
                                            <a class="image-popup-no-margins" href="{{ url("public/$taman->foto") }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$taman->foto") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="image-popup-no-margins" href="{{ url("public/$taman->foto1") }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$taman->foto1") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="image-popup-no-margins" href="{{ url("public/$taman->foto2") }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$taman->foto2") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-text">
                                        <h3><a data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $taman->id }}">{{ $taman->nama }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <br>
            <div class="container">
                <div class="text-center">
                    <strong style="color: rgb(6, 6, 6)">{{ $list_taman->onEachSide(1)->links() }}</strong>
                </div>
            </div>
            <hr class="center_line grey-bg">
            <div class="container">
                <div class="text-center">
                    <strong>
                        Menampilkan
                        {{ $list_taman->firstItem() }}
                        Sampai
                        {{ $list_taman->lastItem() }}
                        Dari
                        {{ $list_taman->total() }}
                        Item
                    </strong>
                </div>
            </div>
        </div>
    </section>
    <!--== Blogs End ==-->
</x-web>

@foreach ($list_taman as $taman)
    <div class="modal fade" id="exampleModalCenter{{ $taman->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter{{ $taman->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="post-img">
                        <div class="blog">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="item">
                                <img class="img-responsive" src="{{ url("public/$taman->foto") }}" alt="" />
                            </div>
                            <p class="text-right">Sumber Foto :
                                <em>{{ $taman->sumber_foto }}</em>
                            </p>
                        </div>

                    </div>

                </div>
                <div class="modal-body">
                    <div class="sidebar_widget widget_archive ">

                        <a class="btn btn-md btn-dark btn-square mt-5 mb-30" href="{{ url("$taman->link") }}">Info
                            Lengkap</a><br>
                        <ul>
                            <li><a style="color: black">Alamat</a> :
                            </li>
                            <span>{{ $taman->alamat }}</span>
                            <li>
                            </li>
                            <li><a style="color: black">Pengelola</a> :
                            </li>
                            <span>{{ $taman->nama_pengelola }}</span>
                            <li><a style="color: black">Nara Hubung</a> :
                            </li>
                            <span>{{ $taman->no_pengelola }}</span>
                        </ul>
                        <ul>
                            <li><a style="color: black">Hari Buka</a> :
                            </li>
                            <span>{{ $taman->hari_buka }}</span>
                            <li><a style="color: black">Jam Buka</a> :
                            </li>
                            <span>{!! date('H:i', strtotime($taman->jam_buka)) !!} -
                                {!! date('H:i', strtotime($taman->jam_tutup)) !!}
                            </span>
                            <li><a style="color: black">Fasilitas</a> :
                            </li>
                            <p style="text-align: justify">{{ $taman->fasilitas }}</p>
                        </ul>
                        <h3 style="font-weight: 600;">{{ $taman->nama }}</h3>
                        <div class="post-text text-left">
                            <p style="text-align: justify">
                                {{ $taman->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endforeach
