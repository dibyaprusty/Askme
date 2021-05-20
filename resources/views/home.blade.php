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
    <div class="col-sm-9 ">
        <h2>Latest Questions</h2>
        </br>

        <!-- adding latest questions  -->

        @foreach($questions as $question)
            @include('layouts.question_template')
        @endforeach
    </div>

  </div>
</div>
@endsection


