<!--
|--------------------------------------------------------------------------
| Home.blade.php
|--------------------------------------------------------------------------
|
| Home page. User is redirected to this page after login.
| This pages is responsible to show latest questions.
|
-->
@extends('layouts.app')


@section('content')
    @include('layouts.side')
    <div class="col-sm-9">
        <h2>Latest Questions</h2>
        </br>

        <!-- adding latest questions  -->

        
        <div class="row border">
            @foreach($questions as $question)

            <div class="col-sm-1 bg-white p-2">
                <div class="row justify-content-md-center">
                    <small>Votes</small>
                </div>
                <div class="row justify-content-md-center">
                    {{$question->points}}
                </div>
            </div>

            <div class="col-sm-1 bg-white p-2">
                <div class="row justify-content-md-center">
                    <small>Answers</small>
                </div>
                <div class="row justify-content-md-center">
                    0
                </div>
            </div>

            <div class="col-sm-10 p-2 bg-white">
                <a href="{{ route('single_question',$question->id) }}"><h2>{{$question->title}}</h2></a>
                
                <!-- updated time in readable form -->
        
                <small>Updated : {{$question->updated_at->diffForHumans()}}</small>           
            </div>
           
            @endforeach
     
        </div>
        
    </div>

  </div>
</div>
@endsection


