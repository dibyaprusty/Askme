    <div class="border">
        <h2>{{$question->title}}</h2>
        <small>Updated at: {{$question->updated_at}}</small>
        <p>{{$question->body}} <a href="{{ route('single_question',$question->id) }}">learn more..</a></p>            
    </div>
    </br>