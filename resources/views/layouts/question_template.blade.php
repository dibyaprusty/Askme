<!--
|--------------------------------------------------------------------------
| question_template.blade.php
|--------------------------------------------------------------------------
|
| Struture to view a question.
| 
-->
    <div class="border text-break p-2 bg-white">
        <h2>{{$question->title}}</h2>
        <p>{!!$question->body!!} <a href="{{ route('single_question',$question->id) }}">learn more..</a></p> 
        
        <!-- updated time in readable form -->

        <small>Updated : {{$question->updated_at->diffForHumans()}}</small>           
    </div>
    </br>