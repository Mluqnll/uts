@extends('template.base')
@section('content')
    <br>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    @csrf
                    <label class="mb-3">Nama :</label>
                    <label for="">{{ $user->nama }}</label>
                    <br>
                    <label class="my-3">Username :</label>
                    <label for="">{{$user->username }}</label>
                    <br>
                    <label class="my-3">Email :</label>
                    <label for="">{{ $user->email }}</label>
                    <br>
                    <div style="margin-top: 2%" class="float-right">
                        <a href="{{ url('admin/user') }}" class="btn btn-primary">Kembali</a>
                    </div>
            </div>
        </div>
        <!--end card-body-->
    </div>
@endsection
