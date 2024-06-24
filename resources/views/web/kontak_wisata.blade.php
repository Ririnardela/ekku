<x-web>

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/1.jpg); height: 700px;">
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
                <div class="row">
                    <div class="col-md-8 centerize-col text-center mt-0">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="raleway-font"><span class="font-100">Informasi Wisata</span></h2>
                            <br>
                            <p style="color: #007bff">Terbaru</p>
                            <hr class="center_line dark-bg">
                        </div>
                    </div>
                </div>

                <div class="row mt-10 mb-100">
                    @foreach ($list_berita as $berita)
                        <div class="row mb-4">
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="team-member">
                                    <div class="team-thumb">
                                        <div class="thumb-overlay"></div>
                                        <img class="img-fluid" src="{{ url("public/$berita->poto") }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-6 col-xs-12">
                                <div class="member-info text-left white-bg">
                                    <h4><a href="{{ url("berita/$berita->id") }}">{{ $berita->judul }}</a></h4>
                                    <p>{{ substr($berita->deskripsi, 0, 200) }}...</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.812596785114!2d109.98644231405744!3d-1.8168321369457205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518e6aef713bf%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1671195827915!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="row">
                <div class="col-md-8 centerize-col text-center mt-50">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="raleway-font"><span class="font-100">Penanggung Jawab Project</span></h2>
                        <hr class="center_line dark-bg">
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                @foreach ($list_kontak_wisata as $key => $kontak_wisata)
                    @if ($key < 2)
                        {{-- Hanya tampilkan dua kontak pertama --}}
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <div class="thumb-overlay"></div>
                                    <img style="width: 90%;" src="{{ url("public/$kontak_wisata->foto") }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <div class="member-info text-left white-bg">
                                <h3>{{ $kontak_wisata->nama }}</h3>
                                <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                {{-- <span class="title">{{ $kontak_wisata->tugas }}</span> --}}
                                <div class="social-icons-style-02">
                                    <ul class="sm-icon mt-20 mb-0">
                                        <li><a class="fb" href="{{ $kontak_wisata->link_fb }}" target="_blank"><i
                                                    class="icofont icofont-facebook"></i></a>
                                        </li>
                                        <li><a class="tw"
                                                href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                target="_blank"><i class="icofont icofont-whatsapp">
                                                </i>
                                            </a>
                                        </li>
                                        <li><a class="ig" href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                    class="icofont-instagram">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>





        <div class="row">
            <div class="col-md-8 centerize-col text-center mt-50">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="raleway-font"><span class="font-100">TIM PBL PART 1</span></h2>
                    <hr class="center_line dark-bg">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-50 justify-content-center">
                @foreach ($list_kontak_wisata as $index => $kontak_wisata)
                    @if ($index >= 2 && $index < 5)
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                            <div class="team-member white-bg p-3 text-center">
                                <div class="team-thumb mb-3" style="font-size: 0.8rem;">
                                    <!-- Ubah nilai font-size di sini untuk mengubah ukuran gambar -->
                                    <div class="thumb-overlay"></div>
                                    <img style="width: 40%; font-size: inherit;"
                                        src="{{ url("public/$kontak_wisata->foto") }}" alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{ $kontak_wisata->nama }}</h3>
                                    <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                    <span class="title">{{ $kontak_wisata->tugas }}</span>
                                    <div class="social-icons-style-02 mt-2">
                                        <ul class="sm-icon mb-0 list-inline">
                                            {{-- <li class="list-inline-item"><a class="fb" href="{{ $kontak_wisata->link_fb }}" target="_blank"><i class="icofont icofont-facebook"></i></a></li> --}}
                                            <li class="list-inline-item"><a class="tw"
                                                    href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                    target="_blank"><i class="icofont icofont-whatsapp"></i></a></li>
                                            <li class="list-inline-item"><a class="ig"
                                                    href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                        class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>





        <div class="row">
            <div class="col-md-8 centerize-col text-center mt-50">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="raleway-font"><span class="font-100">TIM PBL PART 2</span></h2>
                    <hr class="center_line dark-bg">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-50 justify-content-center">
                {{-- Display first 5 contacts --}}
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
                @foreach ($list_kontak_wisata as $index => $kontak_wisata)
                    @if ($index >= 5 && $index < 10)
                        <div class="col-md-2 col-sm-4 col-xs-6 mb-4">
                            <div class="team-member white-bg p-3 text-center">
                                <div class="team-thumb mb-3" style="font-size: 0.8rem;">
                                    <div class="thumb-overlay"></div>
                                    <img class="team-photo" src="{{ url("public/$kontak_wisata->foto") }}"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{ $kontak_wisata->nama }}</h3>
                                    <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                    <span class="title">{{ $kontak_wisata->tugas }}</span>
                                    <div class="social-icons-style-02 mt-2">
                                        <ul class="sm-icon mb-0 list-inline">
                                            <li class="list-inline-item"><a class="tw"
                                                    href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                    target="_blank"><i class="icofont icofont-whatsapp"></i></a></li>
                                            <li class="list-inline-item"><a class="ig"
                                                    href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                        class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
            </div>
            <div class="row justify-content-center">
                {{-- Display next 5 contacts --}}
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
                @foreach ($list_kontak_wisata as $index => $kontak_wisata)
                    @if ($index >= 10 && $index < 15)
                        <div class="col-md-2 col-sm-4 col-xs-6 mb-4">
                            <div class="team-member white-bg p-3 text-center">
                                <div class="team-thumb mb-3" style="font-size: 0.8rem;">
                                    <div class="thumb-overlay"></div>
                                    <img class="team-photo" src="{{ url("public/$kontak_wisata->foto") }}"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{ $kontak_wisata->nama }}</h3>
                                    <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                    <span class="title">{{ $kontak_wisata->tugas }}</span>
                                    <div class="social-icons-style-02 mt-2">
                                        <ul class="sm-icon mb-0 list-inline">
                                            <li class="list-inline-item"><a class="tw"
                                                    href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                    target="_blank"><i class="icofont icofont-whatsapp"></i></a></li>
                                            <li class="list-inline-item"><a class="ig"
                                                    href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                        class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-md-8 centerize-col text-center mt-50">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="raleway-font"><span class="font-100">TIM PBL PART 3</span></h2>
                    <hr class="center_line dark-bg">
                </div>
            </div>
        </div>
        <div class="container">
            {{-- Display the 16th contact in the center --}}
            <div class="row mt-50 justify-content-center">
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
                @foreach ($list_kontak_wisata as $index => $kontak_wisata)
                @if ($index >= 15 && $index < 20)
                        <div class="col-md-2 col-sm-4 col-xs-6 mb-4">
                            <div class="team-member white-bg p-3 text-center">
                                <div class="team-thumb mb-3" style="font-size: 0.8rem;">
                                    <div class="thumb-overlay"></div>
                                    <img class="team-photo" src="{{ url("public/$kontak_wisata->foto") }}"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{ $kontak_wisata->nama }}</h3>
                                    <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                    <span class="title">{{ $kontak_wisata->tugas }}</span>
                                    <div class="social-icons-style-02 mt-2">
                                        <ul class="sm-icon mb-0 list-inline">
                                            <li class="list-inline-item"><a class="tw"
                                                    href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                    target="_blank"><i class="icofont icofont-whatsapp"></i></a></li>
                                            <li class="list-inline-item"><a class="ig"
                                                    href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                        class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
            </div>

            <div class="row mt-50 justify-content-center">
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
                @foreach ($list_kontak_wisata as $index => $kontak_wisata)
                @if ($index >= 20 && $index < 25)
                        <div class="col-md-2 col-sm-4 col-xs-6 mb-4">
                            <div class="team-member white-bg p-3 text-center">
                                <div class="team-thumb mb-3" style="font-size: 0.8rem;">
                                    <div class="thumb-overlay"></div>
                                    <img class="team-photo" src="{{ url("public/$kontak_wisata->foto") }}"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{ $kontak_wisata->nama }}</h3>
                                    <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                    <span class="title">{{ $kontak_wisata->tugas }}</span>
                                    <div class="social-icons-style-02 mt-2">
                                        <ul class="sm-icon mb-0 list-inline">
                                            <li class="list-inline-item"><a class="tw"
                                                    href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                    target="_blank"><i class="icofont icofont-whatsapp"></i></a></li>
                                            <li class="list-inline-item"><a class="ig"
                                                    href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                        class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
            </div>
            <div class="row mt-50 justify-content-center">
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
                @foreach ($list_kontak_wisata as $index => $kontak_wisata)
                @if ($index >= 25 && $index < 26)
                        <div class="col-md-2 col-sm-4 col-xs-6 mb-4">
                            <div class="team-member white-bg p-3 text-center">
                                <div class="team-thumb mb-3" style="font-size: 0.8rem;">
                                    <div class="thumb-overlay"></div>
                                    <img class="team-photo" src="{{ url("public/$kontak_wisata->foto") }}"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{ $kontak_wisata->nama }}</h3>
                                    <span class="title">{{ $kontak_wisata->jabatan }}</span>
                                    <span class="title">{{ $kontak_wisata->tugas }}</span>
                                    <div class="social-icons-style-02 mt-2">
                                        <ul class="sm-icon mb-0 list-inline">
                                            <li class="list-inline-item"><a class="tw"
                                                    href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"
                                                    target="_blank"><i class="icofont icofont-whatsapp"></i></a></li>
                                            <li class="list-inline-item"><a class="ig"
                                                    href="{{ $kontak_wisata->link_ig }}" target="_blank"><i
                                                        class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-1 col-sm-4 col-xs-6 mb-4">
                </div>
            </div>
    
        </div>












        </div>
    </section>



</x-web>
