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

                            <div class="row">
                                <form action="{{ route('admin_update_laporan_akses', $dataLaporan->id) }}" method="post"
                                    enctype="multipart/form-data"
                                    class="col-lg-12 mb-4 d-flex justify-content-center align-items-center flex-column flex-md-row"
                                    style="gap: 8px">
                                    @csrf

                                    {{-- <div class="col-lg-12"> --}}
                                    <div class="form-group" style="flex-basis: 100%">
                                        <label for="link">Link Laporan</label>
                                        <input name="link" value="{{ old('link', $dataLaporan->link) }}" type="text"
                                            class="form-control" id="link" placeholder="Enter link" required>
                                    </div>
                                    <div class="form-group" style="flex-basis: 100%">
                                        <label for="tahun">Tahun</label>
                                        <input name="tahun" value="{{ old('tahun', $dataLaporan->tahun) }}" type="text"
                                            class="form-control" id="tahun" placeholder="Enter tahun" disabled>
                                    </div>
                                    <div class="form-group" style="flex-basis: 100%">
                                        <label for="gambar">Upload Data Gambar</label>
                                        <input name="gambar[]" type="file" class="form-control" id="gambar"
                                            accept=".jpge,.jpg,.png" multiple>
                                    </div>
                                    <div style="flex-basis: auto">
                                        <button class="btn btn-primary" style="margin-top: 11px">Simpan Perubahan</button>
                                    </div>
                                </form>

                                @forelse ($data as $item)
                                    <div class="col-lg-4 mb-2" style="position: relative">
                                        <a href="{{ route('admin_img_laporan_akses_delete', $item->id) }}"
                                            onclick="return confirm('Hapus gambar?')">
                                            <span class="bg-danger text-white px-2 py-0"
                                                style="position: absolute; font-weight: bold; right: 15px;">X</span>
                                        </a>
                                        <img src="{{ asset($item->gambar) }}" class="img-thumbnail">
                                    </div>
                                @empty
                                    <div class="col-lg-12 text-center">
                                        Belum ada data gambar.
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection
