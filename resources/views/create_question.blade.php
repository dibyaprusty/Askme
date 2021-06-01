<!--
|--------------------------------------------------------------------------
| create_question.blade.php
|--------------------------------------------------------------------------
|
| Page responsible to show the form to create a question.
|
-->
@extends('layouts.app')


@section('content')
    @include('layouts.side')
    <div class="col-sm-9">
        <h2>Ask a question</h2>
        </br>

        <!-- Add question form  -->
       

        <form method="post" action="{{route('store_question')}}">
            @csrf

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
              <small>Be specific and imagine you’re asking a question to another person</small>
              @error('title')
                <p class="text-danger">{{$errors->first('title')}}</p>
              @enderror
            </div>

            <div class="form-group text-break">
                <label for="body">Body</label>
                <textarea class="form-control " id="body" name="body">{{old('body')}}</textarea>
                <small>Include all the information someone would need to answer your question</small>
                @error('body')
                    <p class="text-danger">{{$errors->first('body')}}</p>
                @enderror
              </div>
            
            <div class="form-group">
              <label for="tag">Tags</label>
              <select multiple class="form-control @error('tag') is-invalid @enderror " id="tag" name="tag[]" >
                <option>Java</option>
                <option>PHP</option>
                <option>Python</option>
                <option>React</option>
                <option>C#</option>
              </select>
              @error('tag')
                <p class="text-danger">{{$errors->first('tag')}}</p>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
          </form>
    </div>

  </div>
</div>
@endsection