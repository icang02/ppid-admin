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
                                <h5 class="m-b-10">Menu Utama</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="feather icon-home"></i></a></li>
                                {!! implode('', $breadcumb) !!}
                                </li>
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

                        <div class="card-body table-border-style">

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

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            {{-- MODAL TAMBAH --}}
                            <div id="modalTambah" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="modalTambahLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTambahLabel">Tambah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin_laporan_add') }}" enctype="multipart/form-data"
                                                method="POST">
                                                @csrf

                                                @if (request()->is('dashboard/laporan/layanan-informasi-publik'))
                                                    <input type="hidden" name="kategori" value="layanan">
                                                @else
                                                    <input type="hidden" name="kategori" value="survei">
                                                @endif

                                                <div class="form-group">
                                                    <label for="link">Link Laporan</label>
                                                    <input name="link" value="{{ old('link') }}" type="text"
                                                        class="form-control" id="link" placeholder="Enter link"
                                                        required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tahun">Tahun</label>
                                                    <input name="tahun" value="{{ old('tahun') }}" type="number"
                                                        class="form-control" id="tahun" placeholder="Enter tahun"
                                                        required>
                                                </div>

                                                <label for="gambar">Cover</label>
                                                <div class="custom-file">
                                                    <input name="gambar" type="file" class="custom-file-input"
                                                        id="gambar" accept=".jpg,.jpeg,.png">
                                                    <label class="custom-file-label" for="gambar">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn  btn-secondary"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn  btn-primary">Simpan Data</button>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive col-md-10">
                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalTambah">Tambah
                                    Data</button>
                                <table class="table table-hover table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Periode / Tahun</th>
                                            <th>Link</th>
                                            <th>Cover</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <span>
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modalTambah{{ $item->id }}"
                                                            class="btn-sm btn btn-warning">
                                                            <i class="fas fa-edit"></i> Edit</button>
                                                    </span>
                                                    <span>
                                                        <a href="{{ route('admin_laporan_delete', $item->id) }}"
                                                            class="btn-sm btn btn-danger"
                                                            onclick="return confirm('Hapus data ini?')">
                                                            <i class="fas fa-trash"></i> Hapus</a>
                                                    </span>

                                                </td>
                                                <td>{{ $item->tahun }}</td>
                                                <td>
                                                    <a target="_blank" class="btn badge btn-info"
                                                        href="{{ url($item->link) }}">Lihat File</a>
                                                </td>
                                                <td>
                                                    <img width="120" style="border: 1px solid #c5c5c5"
                                                        src="{{ asset($item->gambar) }}">
                                                </td>
                                            </tr>

                                            {{-- MODAL EDIT --}}
                                            <div id="modalTambah{{ $item->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalTambahLabel">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin_laporan_update', $item->id) }}"
                                                                enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                @method('put')

                                                                {{-- @if (request()->is('dashboard/laporan/layanan-informasi-publik'))
                                  <input type="hidden" name="kategori" value="layanan">
                                @elseif (request()->is('dashboard/laporan/survei-layanan-informasi'))
                                  <input type="hidden" name="kategori" value="surveei">
                                @endif --}}

                                                                <div class="form-group">
                                                                    <label for="link">Link Laporan</label>
                                                                    <input name="link"
                                                                        value="{{ old('link', $item->link) }}"
                                                                        type="text" class="form-control"
                                                                        id="link" placeholder="Enter link" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="tahun">Tahun</label>
                                                                    <input name="tahun"
                                                                        value="{{ old('tahun', $item->tahun) }}"
                                                                        type="number" class="form-control"
                                                                        id="tahun" placeholder="Enter tahun" required>
                                                                </div>

                                                                <label for="gambar">Cover</label>
                                                                <div class="custom-file">
                                                                    <input name="gambar" type="file"
                                                                        class="custom-file-input" id="gambar"
                                                                        accept=".jpg,.jpeg,.png">
                                                                    <label class="custom-file-label" for="gambar">Choose
                                                                        file...</label>
                                                                    <div class="invalid-feedback">Example invalid custom
                                                                        file feedback</div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn  btn-secondary"
                                                                data-dismiss="modal">Kembali</button>
                                                            <button type="submit" class="btn  btn-primary">Simpan
                                                                Perubahan</button>
                                                        </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="5">Belum ada data.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection
