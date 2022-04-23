@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<form action="/friends/{{ $friends['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old ('nama') ? old ('nama') : $friend['nama'] }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">No Telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old ('no_tlp') ? old ('no_tlp') : $friend['no_tlp'] }}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old ('alamat') ? old ('alamat') : $friend['alamat'] }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection