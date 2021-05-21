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
        <h2>User Statistics</h2>
       
        <div class="row">
            <div class="col-sm-4  p-4 ">
                <div class="border border-secondary text-white bg-danger font-weight-bold rounded p-2">
                    <div class="row justify-content-sm-center display-3">{{$my_questions}}</div>
                    <div class="row justify-content-sm-center">QUESTIONS<i class="fas fa-question fa-2x"></i></div>
                </div>
            </div>

            <div class="col-sm-4  p-4 ">
                <div class="border border-secondary text-white bg-success font-weight-bold rounded p-2">
                    <div class="row justify-content-sm-center display-3">{{$my_answers}}</div>
                    <div class="row justify-content-sm-center">ANSWERS<i class="fas fa-comments fa-2x"></i></div>
                </div>
            </div>

            <div class="col-sm-4  p-4 ">
                <div class="border border-secondary text-white bg-primary font-weight-bold rounded p-2">
                    <div class="row justify-content-sm-center display-3">{{$my_points}}</div>
                    <div class="row justify-content-sm-center">COINS<i class="fas fa-coins fa-2x"></i></div>
                </div>
            </div>
            
        </div>
        </br>
        <h2>Latest Questions</h2>
        </br>

        <!-- adding latest questions  -->
        
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
    </div>

  </div>
</div>
@endsection


