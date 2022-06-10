@extends('layouts.app')

@section('title', 'Coba')

@section('content')
<div class="card mb-2">
    <div class= "card-body">
        <h3>Name : {{$groups['name']}}</h3>
        <h3>Description : {{$groups['description']}}</h3>
    </div>
</div>

@endsection