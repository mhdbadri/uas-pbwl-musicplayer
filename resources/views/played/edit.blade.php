@extends('main')

@section('title', 'Played')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Played</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Played</a></li>
                            <li class="active">Edit</li>
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
                            <strong>Edit Played</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url('album') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/played/{$played->play_id}") }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Artist</label>
                                <select name="play_artist_id" class="form-control">
                                    <option value="{{ $played->artist->artist_id }}">{{ $played->artist->artist_name }}</option>
                                    @foreach($artist as $item)
                                    <option value="{{ $item->artist_id }}">{{ $item->artist_name }}</option>
                                    @endforeach
            
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Album</label>
                                <select name="play_album_id" class="form-control">
                                    <option value="{{ $played->album->album_id }}">{{ $played->album->album_name }}</option>
                                    @foreach($album as $item)
                                    <option value="{{ $item->album_id }}">{{ $item->album_name }}</option>
                                    @endforeach
            
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Judul Lagu</label>
                                <select name="play_track_id" class="form-control">
                                    <option value="{{ $played->track->track_id }}">{{ $played->track->track_name }}</option>
                                    @foreach($track as $item)
                                    <option value="{{ $item->track_id }}">{{ $item->track_name }}</option>
                                    @endforeach
            
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Putar</label>
                                <input type="date" name="play_date" class="form-control @error('play_date')
                                is-invalid @enderror" value="{{ old('play_date', $played->play_date) }}">
                                @error('play_date')
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
