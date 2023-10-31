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
                                <li class="breadcrumb-item">Landing</li>
                                <li class="breadcrumb-item"><a href="{{ url('dashboard/landing/infografis') }}">Tata Cara /
                                        Infografis</a>
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
                            <h5>Tata Cara / Infografis</h5>
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

                            <div class="table-responsive">
                                <table class="table table-hover table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
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
                                                <td>{{ $item->judul }}</td>
                                                <td>
                                                    <img width="200" style="border: 1px solid #c5c5c5"
                                                        src="{{ asset($item->gambar) }}">
                                                </td>
                                            </tr>

                                            <div id="exampleModalLive{{ $item->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/landing/infografis/update"
                                                                enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input name="judul"
                                                                        value="{{ old('judul', $item->judul) }}"
                                                                        type="text" class="form-control" id="judul"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Enter judul">
                                                                </div>

                                                                <label for="exampleInputEmail1">Gambar</label>

                                                                <div class="mt-3 mb-3 text-center">
                                                                    <img width="280" style="border: 1px solid #c5c5c5"
                                                                        src="{{ asset($item->gambar) }}">
                                                                </div>

                                                                <div class="custom-file">
                                                                    <input name="img" value="{{ $item->gambar }}"
                                                                        type="file" class="custom-file-input"
                                                                        id="validatedCustomFile" accept=".jpg,.jpeg,.png">
                                                                    <label class="custom-file-label"
                                                                        for="validatedCustomFile">Choose file...</label>
                                                                    <div class="invalid-feedback">Example invalid custom
                                                                        file feedback</div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn  btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn  btn-primary">Save
                                                                changes</button>
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
