<x-mitra>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('mitra/taman-nasional/create') }}" class="btn btn-primary float-right mb-10"> <span
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
                            @if (Auth::guard('mitra')->user()->id == $taman->id_mitra)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-layout.button.info-button url="mitra/taman-nasional" id="{{ $taman->id }}" />

                                            <x-layout.button.edit-button url="mitra/taman-nasional"
                                                id="{{ $taman->id }}" />
                                                <x-layout.button.delete-button url="mitra/taman-nasional"
                                                id="{{ $taman->id }}" />

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
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-mitra>
