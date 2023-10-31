@extends('layout.main')
@section('content')
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">{{ $title }}</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                {!! implode('', $breadcumb) !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Hover-table ] start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ $title }}</h5>
                        </div>

                        {{-- MODAL TAMBAH BERITA --}}
                        <div id="modalTambah" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="modalDetailLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalDetailLabel">Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{ route('admin_add_berita') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul"
                                                    placeholder="Enter judul" name="judul" required
                                                    value="{{ old('judul') }}">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group md-6">
                                                        <label for="penulis">Penulis</label>
                                                        <input type="text" class="form-control" name="penulis"
                                                            id="penulis" placeholder="Enter penulis" required
                                                            value="{{ old('penulis', 'PPID') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tanggal">Tanggal</label>
                                                        <input type="date" class="form-control" id="tanggal"
                                                            name="tanggal" placeholder="Enter tanggal" required
                                                            value="{{ old('tanggal', date('Y-m-d')) }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="gambar">Cover Berita / Informasi</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input fileInput" name="gambar"
                                                        accept="image/*">
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose
                                                        file...</label>
                                                </div>

                                                <div class="pembungkus-img mt-2">
                                                    <div class="pembungkus">
                                                        <div class="responsive-element imagePreview"
                                                            style="background-image: url({{ asset('img/berita.jpg') }})">
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    // Mendapatkan elemen input file dan elemen img untuk preview
                                                    var fileInput = document.querySelector('.fileInput');
                                                    var imagePreview = document.querySelector('.imagePreview');

                                                    // Menambahkan event listener ke input file
                                                    fileInput.addEventListener('change', function() {
                                                        var file = fileInput.files[0];
                                                        if (file) {
                                                            // Membaca file gambar sebagai URL data
                                                            var reader = new FileReader();
                                                            reader.onload = function(e) {
                                                                // Menampilkan gambar sebagai preview
                                                                imagePreview.style.backgroundImage = 'url(' + e.target.result + ')';
                                                            };
                                                            reader.readAsDataURL(file);
                                                        }
                                                    });
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label for="isi">Isi Berita / Informasi</label>
                                                <textarea id="editor1" name="isi">{{ old('isi') }}</textarea>
                                            </div>

                                            <input type="hidden" name="kategori" value="berita">
                                            <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-border-style">
                            <button data-toggle="modal" data-target="#modalTambah" class="btn btn-primary mb-3">
                                <i class="fas fa-plus mr-1"></i> Tambah Data</button>

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered table-sm table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <button class="btn-sm btn btn-info" data-toggle="modal"
                                                        data-target="#modalDetail{{ $item->id }}">
                                                        <i class="fas fa-eye"></i></button>
                                                    </span>

                                                    <button class="btn-sm btn btn-warning" data-toggle="modal"
                                                        data-target="#modalEdit{{ $item->id }}">
                                                        <i class="fas fa-edit"></i></button>
                                                    </span>

                                                    <form action="{{ route('admin_delete_berita', $item->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn-sm btn btn-danger"
                                                            onclick="return confirm('Hapus data ini?')">
                                                            <i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                                <td>{{ $item->judul }}</td>
                                                <td class="text-center">{{ $item->penulis }}</td>
                                                <td class="text-center">{{ $item->tanggal }}</td>
                                            </tr>

                                            {{-- MODAL DETAIL BERITA --}}
                                            <div id="modalDetail{{ $item->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalDetailLabel">
                                                                {{ $item->judul }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="pembungkus mb-4">
                                                                <div class="responsive-element"
                                                                    style="background-image: url({{ asset($item->gambar ?? 'img/berita.jpg') }})">
                                                                </div>
                                                            </div>
                                                            <div class="text-muted mb-3">
                                                                <span class="mr-3">
                                                                    <i class="fas fa-calendar mr-1"></i> 2020-01-03
                                                                </span>
                                                                {{-- <span>
                                                                    <i class="fas fa-eye mr-1"></i> {{ $item->view }}x
                                                                    dilihat
                                                                </span> --}}
                                                            </div>
                                                            {!! $item->isi !!}
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- MODAL EDIT BERITA --}}
                                            <div id="modalEdit{{ $item->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalEditLabel">
                                                                {{ $item->judul }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="{{ route('admin_update_berita', $item->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('put')
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input type="text" class="form-control"
                                                                        id="judul" placeholder="Enter judul"
                                                                        name="judul" required
                                                                        value="{{ old('judul', $item->judul) }}">
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group md-6">
                                                                            <label for="penulis">Penulis</label>
                                                                            <input type="text" class="form-control"
                                                                                name="penulis" id="penulis"
                                                                                placeholder="Enter penulis" required
                                                                                value="{{ old('penulis', $item->penulis) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal">Tanggal</label>
                                                                            <input type="date" class="form-control"
                                                                                id="tanggal" name="tanggal"
                                                                                placeholder="Enter tanggal" required
                                                                                value="{{ old('tanggal', $item->tanggal) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="gambar">Cover Berita / Informasi</label>
                                                                    <div class="custom-file">
                                                                        <input type="file"
                                                                            class="custom-file-input fileInput{{ $item->id }}"
                                                                            name="gambar" accept="image/*">
                                                                        <label class="custom-file-label"
                                                                            for="validatedCustomFile">Choose
                                                                            file...</label>
                                                                    </div>

                                                                    <div class="pembungkus-img mt-2">
                                                                        <div class="pembungkus">
                                                                            <div class="responsive-element imagePreview{{ $item->id }}"
                                                                                style="background-image: url({{ asset($item->gambar ?? 'img/berita.jpg') }})">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="isi">Isi Berita / Informasi</label>
                                                                    <textarea id="editor2" name="isi">
                                          {{ old('isi', $item->isi) }}
                                  </textarea>
                                                                </div>

                                                                <button class="btn btn-primary mt-3" type="submit">Simpan
                                                                    Perubahan</button>
                                                            </form>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="5">Belum ada berita.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div style="float: right">
                                {{-- {{ $students->links('vendor.pagination.custom') }} --}}
                                {!! $data->links('vendor.pagination.bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Hover-table ] end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection
