@extends('template.web')
@section('content')
    <div class="container">

        <div class="row mt-5 pt-5">
            <div class="col-md-6">
                <p>{{ $blog->detail }}</p>

            </div>
            <div class="col-md-6">
                <img src="{{ url("public/$blog->foto") }}" style="width: 50%" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="comment-list">
            @foreach ($list_komentar as $komentar)
                @if ($komentar->id_blog == $blog->id)
                    <li class="comment">
                        @if ($komentar->level == 1)
                            <div class="vcard bio">
                                <img src="{{ url('public/web') }}/images/person_3.jpg" alt="Image">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $komentar->nama }}</h3>
                                <div class="meta">{{ $komentar->created_at->format('d-m-y') }}</div>
                                <p>{{ $komentar->pesan }}</p>
                            </div>
                        @endif
                        @if ($komentar->level == 2)
                            <ul class="children">
                                <li class="comment">

                                    <div class="vcard bio">
                                        <img src="{{ url('public/web') }}/images/person_5.jpg" alt="Image">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $komentar->blog->penulis->nama }}</h3>
                                        <div class="meta">{{ $komentar->created_at->format('d-m-y') }}</div>
                                        <p>{{ $komentar->pesan }}</p>
                                    </div>
                                </li>
                            </ul>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="container">
        <h3 class="mb-5">Komentar</h3>
        <form action="{{ url('post-komen') }}" method="post">
            @csrf
            <input type="text" name="id_blog" value="{{ $blog->id }}" hidden>
            <div class="col-md-6">
                <label for="name">Name *</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="col-md-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="message">Komentar</label>
                <textarea name="pesan" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right"> Post Komentar </button>
            </div>
        </form>
    </div>
@endsection
