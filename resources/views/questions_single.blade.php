@extends('layouts.app')

<!--
|--------------------------------------------------------------------------
| single_questions.blade.php
|--------------------------------------------------------------------------
|
| Page responsible to show a single questions.
|
-->
@section('content')
    @include('layouts.side')
    <div class="col-sm-9">

        <!-- adding question -->

        <div class="border p-2 bg-white">
                <h2>{{$questions->title}}</h2>
                <p>{!!$questions->body!!} </p>

                <!-- show the date in human readable format -->

                <small>Updated : {{$questions->updated_at->diffForHumans()}}</small>
        </div>
    </div>
@endsection