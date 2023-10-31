@extends('admin.layouts.main')
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
                            <h5 class="m-b-10">Berita & Informasi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Berita & informasi</a></li>
                            <li class="breadcrumb-item"><a href="#!">List Berita & Informasi</a></li>
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
                        <h5>Hover Table</h5>
                        <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
                    </div>
                   
                    <div class="card-body table-border-style">
                        <button type="button" class="btn  btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLive"><i
                            class="fas fa-plus"></i>Tambah Data</button>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                              
                                                <span>
                                                    <button type="button" data-toggle="modal" data-target="#exampleModalLive"
                                                        class="btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                            </span>
                                              
                                         
                                            <form class="d-inline">
                                                <span>
                                                    <button type="submit" class="btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i></button>
                                                </span>
                                            </form>
                                        </td>
                                        <td>berita</td>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span>
                                               
                                               
                                                    <button type="button" data-toggle="modal" data-target="#exampleModalLive"
                                                        class="btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                      
                                            
                                            </span>
                                            <form class="d-inline">
                                                <span>
                                                    <button type="submit" class="btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i></button>
                                                </span>
                                            </form>
                                        </td>
                                        <td>berita</td>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span>
                                                    <button type="button" data-toggle="modal" data-target="#exampleModalLive"
                                                        class="btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                            </span>
                                            <form class="d-inline">
                                                <span>
                                                    <button type="submit" class="btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i></button>
                                                </span>
                                            </form>
                                        </td>
                                        <td>berita</td>
                                        <td>Mark</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Hover-table ] end -->

            
<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
        
                    <label for="exampleInputEmail1">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
        
                
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn  btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
      
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>


@endsection

