<?php


namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity()
    {
        $my_questions= Question::where('user_id','=',auth()->id())->get();
        $my_answers= Answer::where('user_id','=',auth()->id())->get();
        //return($my_answers);
        return view('activity',[
            'questions' => $my_questions,
            'answers' => $my_answers
        ]);
    }
}
