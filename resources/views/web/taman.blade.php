<x-web>

  @push('style')
    <style>
          .pe-auto{
        cursor: pointer !important;
      }
    </style>
  @endpush

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/lubukbaji.jpg); height: 700px;">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/ekku11.png" alt=""
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

                        <p>Selamat datang di halaman Taman Nasional Gunung Palung (TNGP), destinasi wisata yang menakjubkan di Kabupaten Kayong Utara. Dengan lebih dari 80% wilayahnya berada di Kabupaten Kayong Utara, TNGP menawarkan keindahan alam yang luar biasa dan beragam destinasi bertaraf internasional. Nikmati hutan hujan tropis yang rimbun, sungai yang jernih, serta flora dan fauna eksotis, termasuk orangutan liar yang menjadi ikon taman nasional ini. TNGP juga merupakan tempat penting untuk penelitian dan konservasi, menarik minat pecinta alam dan peneliti dari seluruh dunia.

Selain keindahan alamnya, TNGP didukung oleh masyarakat lokal yang ramah dan peduli lingkungan. Melalui program konservasi dan partisipasi aktif masyarakat, taman nasional ini terus berupaya melestarikan keanekaragaman hayati dan warisan alamnya. Jelajahi TNGP dan temukan pesona serta keajaiban alam yang menanti di Kabupaten Kayong Utara. Nikmati pengalaman wisata yang tak terlupakan di destinasi bertaraf internasional ini.</p>
                        <p>
                            Silahkan KLIK pada nama destinasi yang tersedia untuk menemukan beragam informasi paket
                            wisata dan fasilitas pendukung lainnya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 centerize-col text-center">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <span class="font-100" font-weight:bold>TAMAN NASIONAL GUNUNG PALUNG</span>

                        </div>
                    </div>
                </div>
                <div class="row mt-50">
                    @foreach ($list_taman as $taman)
                        <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <div class="blog-grid-slider slick">
                                        <div class="item pe-auto ">
                                            <a class="image-popup-no-margins"
                                            data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $taman->id }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$taman->foto") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                        <div class="item pe-auto">
                                            <a class="image-popup-no-margins"
                                            data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $taman->id }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$taman->foto1") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                        <div class="item pe-auto">
                                            <a class="image-popup-no-margins" 
                                            data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $taman->id }}"
                                          >
                                                <img class="img-responsive" 
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$taman->foto2") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-text ">
                                        <h3><a class="pe-auto"  data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $taman->id }}">{{ $taman->nama }}</p>
                                            </a>
                                                
                                            @if ($taman->rekomendasi == 2)
                                                <a href="{{ url("$taman->link") }}" target="_blank"
                                                    class="btn btn-info"  style="font-size: 8px;"><span class="fa fa-info"></span>
                                                    Info Lengkap</a>
                                            @elseif ($taman->rekomendasi == 1)
                                            @endif
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

                        <a class="btn btn-md btn-dark btn-square mt-5 mb-30" href="{{ url("$taman->link") }}" target="_blank">
                            Info Lengkap</a><br>
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
                            <li><a style="color: black">Jam Buka Tutup</a> :
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
