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
    <div class="col-sm-9 border bg-white">

        <!-- adding question -->

        <div class=" p-2 text-break ">
                <h2>{{$questions->title}}?</h2>
                <p>{!!$questions->body!!} </p>

                <!-- show the date in human readable format -->

                <small>Updated : {{$questions->updated_at->diffForHumans()}}</small>
        </div>
        </br>
        <h3>Answers:</h3>
        </br>
        @if($answers->count()==0)
            <p>Not Answered Yet.</p>
        @else
           
            @foreach($answers as $answer)
                <div class=" row border p-2 ">
                        <div class="col-sm-9 text-break">
                            <!-- Fetching the user's name -->
                            @php
                                $user_info=App\User::select('name')->where('id','=',$answer->user_id)->first();
                            @endphp

                            <small>Answer by: <a href="{{ route('profile',$answer->user_id) }}">{{$user_info->name}}</a> </small></br>
                            <p>{!!$answer->body!!} </p>
                        </div>  
                        <div class="col-sm-3">
                            <small>{{$answer->updated_at->diffForHumans()}}</small>
                        </div>          
                </div>
            @endforeach
        @endif
        </br>

        <!-- Post answer option -->

        <h3>Your Answers:</h3>
        </br>
        <form method="post" action="{{route('store_answer')}}">
            @csrf

            <div class="form-group">
                <textarea class="form-control " id="body" name="body">{!!old('body')!!}</textarea>
                @error('body')
                    <p class="text-danger">{{$errors->first('body')}}</p>
                @enderror
            </div>

            <!-- Hidden field to send the question Id -->

            <input type="hidden" class="form-control" id="question_id" name="question_id" value="{{$questions->id}}">
            <button type="submit" class="btn btn-primary m-2">Post Your Answer</button>
    
        </form>

         <!-- Scripts for ckeditor -->

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'body', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        </script>
    </div>
@endsection