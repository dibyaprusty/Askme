@extends('layouts.app')


@section('content')
@include('layouts.side')
    <div class="col-sm-9 border">
            <h2>{{$questions->title}}</h2>
            <small>Updated at: {{$questions->updated_at}}</small>
            <p>{{$questions->body}} </p>
    </div>

@endsection