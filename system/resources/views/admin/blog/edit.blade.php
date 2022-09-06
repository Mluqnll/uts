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
                                <form action="{{ url('admin/blog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama
                                                    Penulis</label>
                                                <div class="col-sm-10">
                                                    <select name="id_penulis" class="form-control">
                                                        <option value=""> Silahkan Pilih
                                                            Penulis</option>
                                                        @foreach ($list_penulis as $penulis)
                                                            <option @if ($penulis->id == $blog->id_penulis) selected @endif
                                                                value="{{ $penulis->id }}">
                                                                {{ $penulis->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Judul Blog"
                                                        name="judul" value="{{ $blog->judul }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Detail</label>
                                                <div class="col-sm-10">
                                                    <textarea name="detail" class="form-control" style="width: 100%">{{ $blog->detail }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                                                <div class="col-md-6">
                                                    <img src="{{ url("public/$blog->foto") }}"
                                                        style="width: 50%; height: 90%">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="file" class="form-control" name="foto"
                                                        accept=".jpg, .png, .jpeg">
                                                </div>
                                            </div>


                                        </div>
                                        <div style="margin-top: 2%" class="float-right">
                                            <button class="btn btn-success">Submit</button>
                                            <a href="{{ url('admin/blog') }}" class="btn btn-danger">Cancel</a>
                                        </div>
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
