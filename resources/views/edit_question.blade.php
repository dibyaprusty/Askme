<!--
|--------------------------------------------------------------------------
| edit_question.blade.php
|--------------------------------------------------------------------------
|
| Page responsible to show the form to edit a question.
|
-->
@extends('layouts.app')


@section('content')
    @include('layouts.side')
    <div class="col-sm-9">
        <h2>Update question</h2>
        </br>

        <!-- edit question form  -->
       

        <form method="post" action="{{route('update_question',$question->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$question->title}}">
              <small>Be specific and imagine you’re asking a question to another person</small>
              @error('title')
                <p class="text-danger">{{$errors->first('title')}}</p>
              @enderror
            </div>

            <div class="form-group text-break">
                <label for="body">Body</label>
                <textarea class="form-control " id="body" name="body">{{$question->body}}</textarea>
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
          
        
        <!-- Scripts for ckeditor -->

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'body', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        </script>
    </div>

  </div>
</div>
@endsection