@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<h3>GROUPS</h3>
<HR></HR>
<a href="/groups/create" class="btn btn-primary mb-2">Tambah Groups</a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/groups/{{ $group['id']}}"class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{ $group['description'] }}</p>
  <hr>
  <a href="/groups/create" class="btn btn-primary mb-2">Tambah Anggota</a>

@foreach ($group->friends as $friend)
<li> {{$friend->nama}} </li>
@endforeach



  <hr>




    <a href="/groups/{{ $group['id'] }}/edit" class="btn btn-warning mb-2">Edit Groups</a>
    <form action="/groups/{{$group['id']}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">Delete Groups</button>
    </form>
  </div>
</div>

@endforeach

<div>
{{$groups-> links() }}
</div>
@endsection