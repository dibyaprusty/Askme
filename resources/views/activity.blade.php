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
                    <div class="row justify-content-center">
                        <small>Votes</small>
                    </div>
                    <div class="row justify-content-center">
                        {{$question->points}}
                    </div>
                </div>

                <div class="col-md-1 bg-white p-2">
                    <div class="row justify-content-center">
                        <small>Answers</small>
                    </div>
                    <div class="row justify-content-center">
                        {{$question->answers_count}}
                    </div>
                </div>

                <div class="col-md-9 p-2 bg-white text-break">
                    <a href="{{ route('single_question',$question->id) }}"><h4>{{$question->title}}</h4></a>
                    
                    <!-- updated time in readable form -->
            
                    <small>Updated : {{$question->updated_at->diffForHumans()}}</small> 
                </div>

                <div class="col-md-1 bg-white p-2">
                    <form method="GET" action="{{route('edit_question',$question->id)}}">
                        <button type="submit" class="btn btn-default"><i class="fas fa-edit p-2"></i></button>
                    </form>
                    <form method="POST" action="{{route('delete_question',$question->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-default"><i class="fas fa-trash p-2"></i></button>
                    </form>        
                </div>

            </div>
            @endforeach

        </br>

        <h2>Your Answers</h2>

        <!-- adding your answers  -->
       
        @foreach($answers as $answer)
            <div class="row border">

                <div class="col-md-2 bg-white p-2">
                    <div class="row justify-content-center">
                        <small>Votes</small>
                    </div>
                    <div class="row justify-content-center">
                        {{$answer->points}}
                    </div>
                </div>

                <div class="col-md-9 p-2 bg-white text-break">
                    
                    <a href="{{ $answer->question->path() }}"><h4>{{$answer->question->title}}?</h4></a>
                    <p>Answer: {!!$answer->body!!}</p>

                    <!-- updated time in readable form -->
            
                    <small>Updated : {{$answer->updated_at->diffForHumans()}}</small>  
                </div>

            </div>
        @endforeach

    </div>

  </div>
</div>
@endsection


