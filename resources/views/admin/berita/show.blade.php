<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/berita" />
                   
                </div>
                @csrf
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-lg-12 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle">
                                    <div class="dastyle center">
                                        <img src="{{ url("public/$berita->poto") }}" style="width:50%; height:50%;"
                                            class="rounded">

                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12 ml-auto align-self-center" style="margin-top: 2%;">
                                <ul class="list-unstyled personal-detail mb-0">

                                    <li class="mt-2">
                                        <i class="las la-map-marker text-secondary font-22 align-middle mr-2"></i> <b>
                                            Nama Desa </b> : {{ $berita->judul }}
                                    </li>
                                   

                                    <li class="mt-2" style="text-align: justify">
                                        <i class="las la-edit text-secondary font-22 align-middle mr-2"></i> <b>
                                            Deskripsi </b> :
                                        {{ $berita->deskripsi }}
                                    </li>
                                </ul>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</x-app>
