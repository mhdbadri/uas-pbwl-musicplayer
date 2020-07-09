@extends('main')

@section('title', 'Artist')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Artist</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Artist</a></li>
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
                            <strong>Edit Artist</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url('category') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/artist/{$artist->artist_id}") }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Artist</label>
                                <input type="text" name="artist_name" class="form-control @error('artist_name')
                                is-invalid @enderror" value="{{ old('artist_name', $artist->artist_name) }}">
                                @error('artist_name')
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
