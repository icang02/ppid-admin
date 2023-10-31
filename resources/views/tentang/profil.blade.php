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
                                {{-- {!! $breadcumb !!} --}}
                                {!! implode('', $breadcumb) !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->
            <div class="row">

                <!-- [ form-element ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between flex-md-row flex-column">
                            <h5>{{ $title }}</h5>
                            @if (request()->routeIs('admin_informasi_berkala') || request()->routeIs('admin_informasi_setiap_saat'))
                                <a href="{{ route('admin_list_informasi_publik', $tentang->id) }}"
                                    class="btn btn-sm btn-primary mt-2 mt-md-0">Lihat List Informasi</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if (request()->is('dashboard-formulir*'))
                                        <form action="{{ route('update_formulir', $tentang->id) }}" method="post">
                                        @elseif (request()->is('dashboard/informasi*'))
                                            <form action="{{ route('admin_update_informasi_publik', $tentang->id) }}"
                                                method="post">
                                            @else
                                                <form action="{{ route('update_tentang', $tentang->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                    @endif
                                    @method('put')
                                    @csrf

                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            value="{{ old('judul', $tentang->judul) }}" placeholder="Enter judul">
                                        @error('judul')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    @if (request()->is('dashboard-formulir*'))
                                        <div class="form-group">
                                            <label for="link">Link Formulir</label>
                                            <input type="link" class="form-control" name="link" id="link"
                                                value="{{ old('link', $tentang->link) }}" placeholder="Enter link">
                                            @error('link')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    @endif

                                    @if (request()->is('dashboard/tentang/struktur-ppid'))
                                        <div class="form-group">
                                            <label for="img">Gambar</label>
                                            <input type="file" class="form-control" name="img" id="img"
                                                accept=".jpg,.jpeg,.png">
                                            @error('img')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            <img src="{{ asset($tentang->gambar ?? 'img/berita.jpg') }}" width="200"
                                                class="img-thumbnail mt-2 d-block">
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="isi" class="d-block">Isi / Detail</label>
                                        <textarea name="isi" id="editor">{{ old('isi', $tentang->isi) }}</textarea>
                                        @error('isi')
                                            <small class="text-danger d-block">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
