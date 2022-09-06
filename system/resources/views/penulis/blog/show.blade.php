@extends('template.penulis')
@section('content')
    <br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @csrf
                <br>
                <label class="my-3"> Judul :</label>
                <label for="">{{ $blog->judul }}</label>
                <br>
                <label class="my-3">Foto :</label>
                <label for=""><img src="{{ url("public/$blog->foto") }}" style="width: 10%"></label>
                <br>
                <label class="my-3">Detail :</label>
                <label for="">{{ $blog->detail }}</label>
                <br>
                <div style="margin-top: 2%" class="float-right">

                    <a href="{{ url('blog-penulis') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @foreach ($list_komentar as $komentar)
                    @if ($komentar->id_blog == $blog->id)
                        <div class="vcard bio">
                            <img src="{{ url('public/web') }}/images/person_3.jpg" style="height:50px;" alt="Image">
                        </div>
                        <br>
                        <div class="comment-body">
                            <h3>{{ $komentar->nama }}</h3>
                            <div class="meta">{{ $komentar->created_at->format('d-m-y') }}</div>
                            <p>{{ $komentar->pesan }}</p>
                        </div>
                        <form action="{{url('balas-komentar')}}" method="post">
                            @csrf
                            <label class="mb-3">Balas Komentar</label>
                            <input type="text" class="form-control" name="pesan">

                            <input type="text" name="nama" value="{{$komentar->nama}}" hidden>
                            <input type="text" name="email" value="{{$komentar->email}}" hidden>
                            <input type="text" name="id_blog" value="{{$komentar->id_blog}}" hidden>
                            <button class="btn btn-success float-right"> Balas</button>
                        </form>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
