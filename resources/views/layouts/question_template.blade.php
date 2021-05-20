    <div class="border p-2 bg-white">
        <h2>{{$question->title}}</h2>
        <p>{{$question->body}} <a href="{{ route('single_question',$question->id) }}">learn more..</a></p> 
        <small>Updated : {{$question->updated_at->diffForHumans()}}</small>           
    </div>
    </br>