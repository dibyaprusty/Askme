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

                <div class="col-md-10 p-2 bg-white text-break">
                    <a href="{{ route('single_question',$question->id) }}"><h4>{{$question->title}}</h4></a>
                    
                    <!-- updated time in readable form -->
            
                    <small>Updated : {{$question->updated_at->diffForHumans()}}</small> 
                    <div style="float:right"><i class="fas fa-edit p-2"></i><i class="fas fa-trash p-2"></i></div>          
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

                <div class="col-md-10 p-2 bg-white text-break">
                    
                    <!-- Find the question id and title for current answer -->
                    @php
                        $question_info= App\Question::select('title','id')->where('id','=',$answer->question_id)->first();
                    @endphp

                    <a href="{{ route('single_question',$question_info->id) }}"><h4>{{$question_info->title}}?</h4></a>
                    <p>Answer: {!!$answer->body!!}</p>

                    <!-- updated time in readable form -->
            
                    <small>Updated : {{$answer->updated_at->diffForHumans()}}</small>  
                    <div style="float:right"><i class="fas fa-edit p-2"></i><i class="fas fa-trash p-2"></i></div>         
                </div>
            </div>
        @endforeach

    </div>

  </div>
</div>
@endsection


