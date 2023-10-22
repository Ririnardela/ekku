<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/taman/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
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
                                            <x-layout.button.info-button url="admin/taman"
                                                id="{{ $taman->id }}" />
                                            <x-layout.button.edit-button url="admin/taman"
                                                id="{{ $taman->id }}" />
                                            <x-layout.button.delete-button url="admin/taman"
                                                id="{{ $taman->id }}" />

                                                @if ($taman->rekomendasi == 1)
                                            <form action="{{url('admin/rekomendasi-taman', $taman->id)}}" method="POST">
                                                @csrf
                                                @method("PUT")
                                                <button class="btn btn-success"><span class="fa fa-check"></span> Berikan Rekomendasi</button>
                                                </form>
                                            @endif

                                            @if ($taman->rekomendasi == 2)
                                            <form action="{{url('admin/hapus-rekomendasi-taman', $taman->id)}}" method="POST">
                                                @csrf
                                                @method("PUT")
                                                <button class="btn btn-dark"><span class="fa fa-check"></span> Hapus Rekomendasi</button>
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
</x-app>

