@extends('template.base')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">

                    <h4 class="mt-0 header-title">Data Blog</h4>
                    <a href="{{ url('admin/blog') }}/create" class="btn btn-primary float-right" style="margin-top: -3%"><span
                            class="fa fa-plus"></span> Tambah Data </a>
                </div>
                <div class="card-body">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Aksi </th>
                                <th> Nama Penulis </th>
                                <th> Judul </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_blog as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url("admin/blog/$blog->id") }}" class="btn btn-info"><span
                                                    class="fa fa-info"></span> Lihat
                                            </a>
                                            <a href="{{ url("admin/blog/$blog->id") }}/edit" class="btn btn-warning"><span
                                                    class="fa fa-edit"></span> Edit </a>
                                            @include('template.utils.delete', [
                                                'url' => url('admin/blog', $blog->id),
                                            ])
                                        </div>
                                    </td>
                                    <td>{{ $blog->penulis->nama }}</td>
                                    <td>{{ $blog->judul }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
@endsection
