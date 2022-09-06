@extends('template.web')
@section('content')
    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('public/app/blog/gunung.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5" data-aos="fade-right">
                        <h1 class="mb-3 text-white">Mari Sejenak Berkeluh Kesah Ke Alam</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach ($list_blog as $blog)             
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-entry-1 h-100">
                        <a href="#">
                            <img src="{{url("public/$blog->foto")}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-entry-1-contents">
                            <h2><a href="{{url("blog/$blog->id")}}">{{$blog->judul }}</a></h2>
                            <span>{{ $blog->created_at->format('d-m-y') }}<span class="mx-2">by</span> <a
                                    href="#">{{$blog->penulis->nama}}</a></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
