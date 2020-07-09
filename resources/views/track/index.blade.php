@extends('main')

@section('title', 'Track')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Track</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Track</a></li>
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
                            <strong>Data Track</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url("track/create") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Lagu</th>
                            <th>Nama Artis</th>
                            <th>Nama Album</th>
                            <th>Lagu</th>
                            <th>Durasi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($track as $item)
                            <tr>
                            <td>{{ $loop-> iteration }}</td>
                            <td>{{ $item->track_name }}</td>
                            <td>{{ $item->artist->artist_name }}</td>
                            <td>{{ $item->album->album_name }}</td> 
                            <td>
                                <audio controls>
                                <source src="music/{{ $item->track_file }} " type="audio/mpeg" >
                                </audio>    
                            </td> 
                            <td>{{ $item->track_time }}</td>


                            <td class="text-center">
                                <a href="{{ url("/track/{$item->track_id}/edit") }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url ("/track/{$item->track_id}") }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
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
