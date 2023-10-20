<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/mitra" />

                    <h3 class="text-center">Edit Data Mitra</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/mitra', $mitra->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $mitra->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Kategori Mitra</label>
                            <div class="col-sm-10">
                                <select name="kategori" class="form-control">
                                    <option value="Pengelola Wisata" @if ($mitra->kategori == 'Pengelola Wisata') selected @endif>Pengelola Wisata
                                    </option>
                                    <option value="Pelaku Usaha" @if ($mitra->kategori == 'Pelaku Usaha') selected @endif>Pelaku Usaha
                                    </option>
                                    <option value="Pengelola Taman Nasional" @if ($mitra->kategori == 'Pengelola Taman Nasional') selected @endif>Pengelola Taman Nasional
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username"
                                    value="{{ $mitra->username }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirmasi_password"
                                    value="{{ $mitra->confirmasi_password }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Alamat Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat"
                                    value="{{$mitra->alamat}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Nomor Telpon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_telpon"
                                    value="{{$mitra->nomor_telpon}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Poto</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$mitra->foto") }}" style="width:50%">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg"
                                    value="{{ $mitra->foto }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary float-right"><span
                                        class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
