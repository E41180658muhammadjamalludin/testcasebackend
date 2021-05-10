@extends('layouts.master')
@section('content')
@section('title','Home')

<div class="container">
    <div class="card-group">
    @foreach($data as $val)
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{ $val->title }}</h5>
        <p class="card-text"><small class="text-muted">at {{ $val->created_at }}</small></p>
        <p class="card-text">{{ substr($val->description, 0, 130) . '...' }}</p>
        <p class="card-text"><a href="/detail/{{ $val->id}}">Detail</a></p>
        </div>
    </div>
    @endforeach

    </div>
</div>

@endsection