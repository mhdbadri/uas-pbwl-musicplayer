@extends('main')

@section('title', 'Album')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Album</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Album</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Data Album</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url("album/create") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Artist</th>
                            <th>Nama Album</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($album as $item)
                            <tr>
                            <td>{{ $loop-> iteration }}</td>
                            <td>{{ $item->artist->artist_name }}</td>
                            <td>{{ $item->album_name }}</td>  
                            <td class="text-center">
                                <a href="{{ url("/album/{$item->album_id}/edit") }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url ("/album/{$item->album_id}") }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i>  
                                    </button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                </div>
                
             </div>
        </div>

@endsection
