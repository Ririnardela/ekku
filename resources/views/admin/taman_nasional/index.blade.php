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
                                        </div>
                                    </td>
                                    <td>{{ $taman->nama }}</td>
                                    <td>{{ $taman->alamat }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>

