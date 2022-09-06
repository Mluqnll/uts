@extends('template.base')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="mt-0 header-title">Edit Data</h4>
                </div>
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <form action="{{ url('admin/penulis-update', $penulis->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3"> Nama </label>
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ $penulis->nama }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3"> Username </label>
                                            <input type="text" class="form-control" name="username"
                                                value="{{ $penulis->username }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3"> Email </label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $penulis->email }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3"> No Handphone </label>
                                            <input type="text" class="form-control" name="nomor_hp"
                                                value="{{ $penulis->nomor_hp }}">
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
