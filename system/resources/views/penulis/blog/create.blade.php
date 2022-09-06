@extends('template.penulis')
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
                                <form action="{{ url('blog-penulis') }}" method="post"enctype="multipart/form-data">
                                    @csrf
                                   
                                    <input type="text" name="id_penulis" value="{{ $penulis->id }}" hidden>
                                    <br>
                                    <label class="mb-3">Judul</label>
                                    <input type="text" class="form-control" name="judul">
                                    <br>
                                    <label class="mb-3">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                    <br>
                                    <label class="mb-3">Detail</label>
                                        <textarea name="detail" class="form-control" style=" width: 100%;"></textarea>
                                    <br>
                                    <div style="margin-top: 2%" class="float-right">
                                        <button class="btn btn-success">Submit</button>
                                        <a href="{{ url('blog-penulis') }}" class="btn btn-danger">Cancel</a>
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
