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
                            <h5>{{ $data->judul }}</h5>
                            <span class="d-block m-t-5">Daftar {{ strtolower($data->judul) }}.</span>
                        </div>

                        {{-- MODAL TAMBAH DATA --}}
                        <div id="modalTambah" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="modalDetailLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('admin_add_list_informasi_publik') }}" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDetailLabel">Tambah Data</h5>
                                        </div>

                                        <div class="modal-body">
                                            @csrf
                                            <input type="hidden" name="informasi_publik_id" value="{{ $data->id }}">
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul"
                                                    placeholder="Enter judul" name="judul" required
                                                    value="{{ old('judul') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="isi">Isi</label>
                                                <textarea name="isi" id="editor4"></textarea>
                                            </div>
                                        </div>

                                        @if (request()->is('dashboard/berita'))
                                            <input type="hidden" name="kategori" value="berita">
                                        @elseif (request()->is('dashboard/informasi/informasi-serta-merta'))
                                            <input type="hidden" name="kategori" value="informasi serta merta">
                                        @endif

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="card-body table-border-style">
                            <button type="button" class="btn  btn-primary mb-3" data-toggle="modal"
                                data-target="#modalTambah">
                                <i class="fas fa-plus"></i>&nbsp; Tambah Data</button>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @error('isi')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                <script>
                                    setTimeout(function() {
                                        // Menggunakan jQuery untuk menghilangkan elemen
                                        $(".alert").fadeOut();
                                    }, 3000); // 3000 milidetik (3 detik)
                                </script>
                            @enderror

                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Judul</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($listData as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#modalDetail{{ $item->id }}"
                                                        class="btn-sm btn btn-info">
                                                        <i class="fas fa-eye"></i></button>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#exampleModalLive{{ $item->id }}"
                                                        class="btn-sm btn btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                                    <form
                                                        action="{{ route('admin_delete_list_informasi_publik', $item->id) }}"
                                                        method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" data-toggle="modal"
                                                            class="btn-sm btn btn-danger"
                                                            onclick="return confirm('Hapus data ini?')">
                                                            <i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                                <td>{{ $item->judul }}</td>
                                            </tr>

                                            {{-- MODAL DETAIL --}}
                                            <div id="modalDetail{{ $item->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalDetailLabel">
                                                                {{ $item->judul }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            {!! $item->isi !!}
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- MODAL EDIT --}}
                                            <div id="exampleModalLive{{ $item->id }}" class="modal fade"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">
                                                                {{ $item->judul }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>

                                                        <form
                                                            action="{{ route('admin_update_list_informasi_publik', $item->id) }}"
                                                            method="POST">
                                                            <div class="modal-body">
                                                                @csrf
                                                                @method('put')
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input name="judul" value="{{ $item->judul }}"
                                                                        type="text" class="form-control"
                                                                        id="judul" placeholder="Enter judul" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="judul">Isi Informasi</label>
                                                                    <textarea name="isi" id="editor5">{{ $item->isi }}</textarea>
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
                                                <td colspan="3">Belum ada data.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            {!! $listData->render() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection
