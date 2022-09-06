@extends('template.base')
@section('content')
    <br>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    @csrf
                    <label class="mb-3">Nama :</label>
                    <label for="">{{ $penulis->nama }}</label>
                    <br>
                    <label class="my-3">Username :</label>
                    <label for="">{{$penulis->username }}</label>
                    <br>
                    <label class="my-3">Email :</label>
                    <label for="">{{ $penulis->email }}</label>
                    <br>
                    <label class="my-3">No Handphone :</label>
                    <label for="">{{ $penulis->nomor_hp }}</label>
                    <br>
                    <div style="margin-top: 2%" class="float-right">
                        <a href="{{ url('admin/penulis') }}" class="btn btn-primary">Kembali</a>
                    </div>
            </div>
        </div>
        <!--end card-body-->
    </div>
@endsection
