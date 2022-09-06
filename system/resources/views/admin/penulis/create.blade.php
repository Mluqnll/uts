@extends('template.base')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="mt-0 header-title">Tambah Data</h4>
                </div>
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <form action="{{ url('admin/penulis') }}" method="post">
                                    @csrf
                                    <label class="mb-3">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Username</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">No Handphone</label>
                                            <input type="text" class="form-control" name="nomor_hp">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3">Password</label>
                                            <input type="Password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div style="margin-top: 2%" class="float-right">
                                        <button class="btn btn-success">Submit</button>
                                        <a href="{{ url('admin/penulis') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
