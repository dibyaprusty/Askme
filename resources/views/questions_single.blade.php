@extends('layouts.app')


@section('content')
@include('layouts.side')
<div class="col-sm-9">
    <div class="border p-2 bg-white">
            <h2>{{$questions->title}}</h2>
            <p>{{$questions->body}} </p>
            <small>Updated : {{$questions->updated_at->diffForHumans()}}</small>
    </div>
</div>
@endsection