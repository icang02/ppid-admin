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
                                <li class="breadcrumb-item"><a href="{{ url('dashboard/landing/slogan') }}">Slogan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">

                <!-- [ form-element ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Slogan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form action="/landing/quotes/update" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input name="judul" value="{{ old('judul', $quotes->judul) }}" type="text"
                                                class="form-control" id="judul" placeholder="Enter judul">
                                            @error('judul')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Isi Slogan</label>
                                            <textarea name="isi" class="form-control" id="isi" rows="6">{{ old('isi', $quotes->isi) }}</textarea>
                                            @error('isi')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            @endsection
