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
                                <form action="{{ url('admin/blog') }}" method="post"enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Nama Penulis</label>
                                            <div class="col-sm-10">
                                                <select name="id_penulis" class="form-control">
                                                    <option value=""> Silahkan Pilih Penulis</option>
                                                    @foreach ($list_penulis as $penulis)
                                                        <option value="{{ $penulis->id }}"> {{ $penulis->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3">Judul</label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                    </div>
                                    <label class="mb-3">Foto</label>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                    </div>
                                    <label class="mb-3">Detail</label>
                                    <div class="col-sm-12">
                                        <textarea name="detail" class="form-control" style=" width: 100%;"></textarea>
                                    </div>
                                    <div style="margin-top: 2%" class="float-right">
                                        <button class="btn btn-success">Submit</button>
                                        <a href="{{ url('admin/blog') }}" class="btn btn-danger">Cancel</a>
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
