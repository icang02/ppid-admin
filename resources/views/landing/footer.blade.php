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
                                <h5 class="m-b-10">Menu Landing</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Menu Utama</li>
                                <li class="breadcrumb-item"><a href="{{ url('dashboard/landing/infografis') }}">Footer</a>
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
                            <h5>Keterangan Footer</h5>
                        </div>

                        <div class="card-body table-border-style">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-hover table-sm table-bordered">
                                    <thead>
                                        <tr class="text-wrap">
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($info as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <span>
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#exampleModalLive{{ $item->id }}"
                                                            class="btn-sm btn btn-warning">
                                                            <i class="fas fa-edit"></i> Edit</button>
                                                    </span>

                                                </td>
                                                <td class="text-wrap">{{ $item->judul }}</td>
                                                <td class="text-wrap">{{ $item->isi }}</td>
                                            </tr>

                                            <div id="exampleModalLive{{ $item->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">Edit Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin_landing_footer_update', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input name="judul"
                                                                        value="{{ old('judul', $item->judul) }}"
                                                                        type="text" class="form-control" id="judul"
                                                                        placeholder="Enter judul">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="isi">Isi</label>
                                                                    <textarea class="form-control" name="isi" id="isi" rows="6">{{ old('isi', $item->isi) }}</textarea>
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
                                        @endforeach
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
