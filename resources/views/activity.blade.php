<!--
|--------------------------------------------------------------------------
| activity.blade.php
|--------------------------------------------------------------------------
|
| Shows questions and answers posted by user.
|
-->
@extends('layouts.app')


@section('content')
    @include('layouts.side')
    <div class="col-sm-9">
    
        <h2>Your Questions</h2>

        <!-- adding your questions  -->
        
            @foreach($questions as $question)
            <div class="row border">
                <div class="col-md-1 bg-white p-2">
                    <div class="row justify-content-sm-center">
                        <small>Votes</small>
                    </div>
                    <div class="row justify-content-sm-center">
                        {{$question->points}}
                    </div>
                </div>

                <div class="col-md-1 bg-white p-2">
                    <div class="row justify-content-sm-center">
                        <small>Answers</small>
                    </div>
                    <div class="row justify-content-sm-center">
                        0
                    </div>
                </div>

                <div class="col-md-10 p-2 bg-white">
                    <a href="{{ route('single_question',$question->id) }}"><h2>{{$question->title}}</h2></a>
                    
                    <!-- updated time in readable form -->
            
                    <small>Updated : {{$question->updated_at->diffForHumans()}}</small>           
                </div>
            </div>
            @endforeach

        </br>

        <h2>Your Answers</h2>

        <!-- adding your answers  -->

        @foreach($answers as $answer)
            <div class="row border">
                <div class="col-md-2 bg-white p-2">
                    <div class="row justify-content-sm-center">
                        <small>Votes</small>
                    </div>
                    <div class="row justify-content-sm-center">
                        {{$answer->points}}
                    </div>
                </div>

                <div class="col-md-10 p-2 bg-white">
                    <a href="{{ route('single_question',$question->id) }}"><h2>{{$question->title}}</h2></a>
                    <p>Answer: {{$answer->body}}</p>
                    <!-- updated time in readable form -->
            
                    <small>Updated : {{$answer->updated_at->diffForHumans()}}</small>           
                </div>
            </div>
        @endforeach

    </div>

  </div>
</div>
@endsection


