<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <x-layout.button.back-button url="admin/taman"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url("public/$taman->foto")}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div><!--end col-->
                        <div class="col-md-8">
                            <h2 class="font-18 font-weight-semibold mb-2">{{$taman->nama}}</h2>
                            <p class="font-12font-weight-semibold mb-2">{{$taman->deskripsi}}</p>
                            <p class="font-12font-weight-semibold mb-2">{{$taman->alamat}}</p>

                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
</x-app>
