@extends('main')

@section('title', 'Track')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>track</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Track</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Tambah Track</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url('track') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/track") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label>Judul Lagu</label>
                                <input type="text" name="track_name" class="form-control @error('track_name')
                                is-invalid @enderror" value="{{ old('track_name') }}" autofocus>
                                @error('track_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Artist</label>
                                <select name="track_artist_id" class="form-control @error('track_artist_id')
                                is-invalid @enderror" value="{{ old('track_artist_id') }}" autofocus">
                                    <option value=""></option>
                                    @foreach($artist as $item)
                                    <option value="{{ $item->artist_id }}">{{ $item->artist_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Album</label>
                                <select name="track_album_id" class="form-control @error('track_album_id')
                                is-invalid @enderror" value="{{ old('track_album_id') }}" autofocus">
                                    <option value=""></option>
                                    @foreach($album as $item)
                                    <option value="{{ $item->album_id }}">{{ $item->album_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Lagu</label>
                                <input type="file" name="track_file" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Durasi lagu</label>
                                <input type="text" name="track_time" class="form-control @error('track_time')
                                is-invalid @enderror" value="{{ old('track_time') }}" autofocus>
                                @error('track_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                           
                            <button type="submit" class="btn btn-success">Simpan</button>
        
                        </form>
                    </div> 
                </div>               
            </div>
                </div>
                
             </div>
        </div>

@endsection
