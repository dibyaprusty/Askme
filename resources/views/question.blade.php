@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questions</div>

                @foreach($questions as $question)
                <div class="card-body">

                    <a href="{{ route('singleQuestion',$question->id) }}">{{$question->title}}</a>
                    <br>
                    <p>{{$question->body}}</p>

                </div>
                @endforeach
                

            </div>
        </div>
    </div>
</div>
@endsection