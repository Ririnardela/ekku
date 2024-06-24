<x-web>
    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/dw.jpg); height: 700px;">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <div class="all-padding-50">
                                    <img src="{{ url('public/web/assets/images/ekku11.png') }}" class="center" alt=""
                                        style="width: 70%; height: auto; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg" id="pricing">
        <div class="container">
            @foreach ($list_bulan as $bulan)
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="date-box bg-dark text-center text-white py-2">
                            <h2 class="text-uppercase">{{ $bulan->nama }}</h2>
                        </div>
                    </div>
                    @foreach ($list_kalender_wisata as $kalender_wisata)
                        @if ($kalender_wisata->id_bulan == $bulan->id)
                            <div class="col-md-12">
                                <div class="event-box my-2 d-flex align-items-center">
                                    <div
                                        class="date bg-primary text-white d-flex flex-column align-items-center justify-content-center">
                                        <span class="month">{{ strtoupper($bulan->nama) }}</span>
                                        <span
                                            class="day">{{ \Carbon\Carbon::parse($kalender_wisata->tanggal)->format('d') }}</span>
                                    </div>
                                    <div class="event-content bg-light p-3 flex-grow-1">
                                        <a href="{{ url("detail-kalender/$kalender_wisata->id") }}" class="text-dark">
                                            <h5 class="mb-1">{{ $kalender_wisata->nama }}</h5>
                                            <p class="mb-0">{{ Str::limit($kalender_wisata->deskripsi, 100) }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
</x-web>

@foreach ($list_kalender_wisata as $kalender_wisata)
    <div class="modal fade" id="Kalender{{ $kalender_wisata->id }}" tabindex="-1" role="dialog"
        aria-labelledby="Kalender{{ $kalender_wisata->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="img-responsive" src="{{ url("public/$kalender_wisata->foto") }}"
                        style="width: 100%; height: 50%; object-fit: cover" alt="" />
                    <div class="row mt-2 w-100">
                        <div class="col-md-6">
                            <a href="{{ url("$kalender_wisata->link_event") }}" class="btn btn-success" target="_blank"
                                title="Link Video Youtube"><i class="icofont-youtube"></i> VIEW EVENT</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Sumber Foto : <em>{{ $kalender_wisata->sumber_foto }}</em></p>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="single-blog-list list-unstyled">
                        <li>
                            <div class="post-wrap">
                                <div class="post-text">
                                    <h3>{{ $kalender_wisata->nama }}</h3>
                                    <p>{!! nl2br($kalender_wisata->deskripsi) !!}</p>
                                    <p><strong>Event:</strong> <span>{{ $kalender_wisata->event }}</span></p>
                                    <p><strong>Deskripsi Event:</strong>
                                        <span>{{ $kalender_wisata->deskripsi_event }}</span></p>
                                    <p><strong>Alamat:</strong> <span>{{ $kalender_wisata->tempat }}</span></p>
                                    <p><strong>Penyelenggara Event:</strong>
                                        <span>{{ $kalender_wisata->penyelenggara_event }}</span></p>
                                    <p><strong>Waktu Event:</strong> <span>{{ $kalender_wisata->tanggal }}</span></p>
                                    <p><strong>Transportasi:</strong> <span>{{ $kalender_wisata->transportasi }}</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach


<style>
    .event-box {
        display: flex;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }

    .date {
        width: 80px;
        flex-shrink: 0;
        text-align: center;
    }

    .month {
        font-size: 12px;
        font-weight: bold;
    }

    .day {
        font-size: 24px;
        font-weight: bold;
    }

    .event-content {
        padding: 15px;
    }

    .event-content h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .event-content p {
        margin-bottom: 0;
        font-size: 14px;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>
