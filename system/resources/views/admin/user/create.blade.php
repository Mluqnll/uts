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
                                <form action="{{ url('admin/user') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Nama</label>
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3">Username</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3">Password</label>
                                            <input type="password" class="form-control" name="password">

                                        </div>
                                    </div>
                                    <div style="margin-top: 2%" class="float-right">
                                        <button class="btn btn-success">Submit</button>
                                        <a href="{{ url('admin/user') }}" class="btn btn-danger">Cancel</a>
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
