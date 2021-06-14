<!--
|--------------------------------------------------------------------------
| questions.blade.php
|--------------------------------------------------------------------------
|
| Page responsible to show all the questions published.
|
-->
@extends('layouts.app')


@section('content')
    @auth
        @include('layouts.side')
    <div class="col-sm-9">
    @endauth
    
    @guest
    <div class="col-sm-12">
    @endguest
        <div class="row">
            <div class="col-sm-6">
                <h2>All Questions</h2> 
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-end">{{$questions}}</div>
            </div>
        </div>
        
        </br>

        <!-- adding questions  -->
        
        @foreach($questions as $question)
            @include('layouts.question_template')
        @endforeach

        

    </div>

  </div>
</div>
@endsection