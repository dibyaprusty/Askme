@extends('layouts.app')


@section('content')
    @include('layouts.side')
    <div class="col-sm-9 ">
        <h2>Latest Questions</h2>
        </br>
        @foreach($questions as $question)
            @include('layouts.question_template')
        @endforeach
    </div>

  </div>
</div>
@endsection


