<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/taman" />

                    <h3 class="text-center">Tambah Data Taman Nasional</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/taman', $taman->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Taman Nasional</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" value="{{ $taman->nama }}"
                                    placeholder="Nama Taman Nasional">
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Link Taman</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="link" placeholder="Link Taman"
                                    value="{{ $taman->link }}">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_pengelola"
                                    value="{{ $taman->nama_pengelola }}" placeholder="Pengeloa">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Nara Hubung</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_pengelola"
                                    value="{{ $taman->no_pengelola }}" placeholder="Nara Hubung">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Alamat</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="alamat" value="{{ $taman->alamat }}"
                                    placeholder="Alamat Taman Nasional">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Sumber Foto</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sumber_foto"
                                    value="{{ $taman->sumber_foto }}" placeholder="Sumber Foto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Titik Latitude </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lat" value="{{ $taman->lat }}"
                                    placeholder="Titik Latitude">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Titik Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lng" value="{{ $taman->lng }}"
                                    placeholder="Titik Longitude">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label text-left"> Hari Buka</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="hari_buka" placeholder="Hari Buka"
                                    value="{{ $taman->hari_buka }}">
                            </div>
                            <label class="col-sm-1 col-form-label text-left"> Jam Buka</label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" name="jam_buka" placeholder="Jam Buka"
                                    value="{{ $taman->jam_buka }}">
                            </div>
                            <label class="col-sm-1 col-form-label text-left"> Jam Tutup</label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" name="jam_tutup"
                                    placeholder="Jam Tutup"value="{{ $taman->jam_tutup }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Poto</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$taman->foto") }}" style="width: 50%"
                                    class="avatar-img rounded">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg"
                                    value="{{ $taman->foto }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Poto 1</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$taman->foto1") }}" style="width: 50%"
                                    class="avatar-img rounded">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto1" accept=".jpg, .png, .jpeg"
                                    value="{{ $taman->foto1 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Poto 2</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$taman->foto2") }}" style="width: 50%"
                                    class="avatar-img rounded">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto2" accept=".jpg, .png, .jpeg"
                                    value="{{ $taman->foto2 }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="deskripsi">{{ $taman->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-12">
                                <button class="btn btn-primary float-right"><span class="fa fa-save"></span>
                                    Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app>
