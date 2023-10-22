<x-dinas>
    @include('menu.menu')
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                    <h4 class="card-title">Data Taman Nasional</h4>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Taman Nasional</th>
                                <th>Lokasi</th>
                                <th class="text-center">Status Taman Nasional</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_taman as $taman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-layout.button.info-button url="dinas/taman-nasional" id="{{ $taman->id }}" />

                                                @if ($taman->status == 1)
                                                <form action="{{ url('dinas/status-taman', $taman->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-success"><span class="fa fa-check"></span>
                                                        Setuju</button>
                                                </form>
                                            @endif

                                            @if ($taman->status == 1)
                                                <form action="{{ url('dinas/hapus-status-taman', $taman->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-dark"><span class="fa fa-check"></span>
                                                        Tidak Setuju</button>
                                                </form>
                                            @endif

                                            @if ($taman->status == 2)
                                                <form action="{{ url('dinas/batal-status-taman', $taman->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-dark"><span class="fa fa-check"></span>
                                                        Batalkan Persetujuan</button>
                                                </form>
                                            @endif
                                            @if ($taman->status == 3)
                                                <form action="{{ url('dinas/status-taman', $taman->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-success"><span class="fa fa-check"></span>
                                                        Berikan Persetujuan</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $taman->nama }}</td>
                                    <td>{{ $taman->alamat }}</td>
                                    <td class="text-center">
                                        @if ($taman->status == 1)
                                            <p class="btn btn-primary"> Data Baru</p>
                                        @endif
                                        @if ($taman->status == 2)
                                            <p class="btn btn-warning"> Di Setujui</p>
                                        @endif

                                        @if ($taman->status == 3)
                                            <p class="btn btn-danger"> Di Batalkan</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dinas>
