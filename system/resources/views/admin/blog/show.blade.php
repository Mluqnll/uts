@extends('template.base')
@section('content')
    <br>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    @csrf
                    <label class="mb-3">Nama Penulis :</label>
                    <label for="">{{ $blog->penulis->nama }}</label>
                    <br>
                    <label class="my-3"> Judul :</label>
                    <label for="">{{$blog->judul }}</label>
                    <br>
                    <label class="my-3">Foto :</label>
                    <label for=""><img  src="{{url("public/$blog->foto")}}" style="width: 10%" ></label>
                    <br>
                    <label class="my-3">Detail :</label>
                    <label for="">{{ $blog->detail }}</label>
                    <br>
                    <div style="margin-top: 2%" class="float-right">
                        <a href="{{ url('admin/blog') }}" class="btn btn-primary">Kembali</a>
                    </div>
            </div>
        </div>
        <!--end card-body-->
    </div>
@endsection
