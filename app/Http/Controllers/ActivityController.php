<?php
/*
|--------------------------------------------------------------------------
| ActivityController
|--------------------------------------------------------------------------
|
| controller responsible for users activity.
|
*/

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use App\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * 
     *Provides current users questions and answers.
     */
    public function activity()
    {
        $my_questions= Question::withCount('answers')->where('user_id','=',auth()->id())->latest()->get();
        $my_answers= Answer::with('question')->where('user_id','=',auth()->id())->latest()->get();
        //return($my_answers);
        return view('activity',[
            'questions' => $my_questions,
            'answers' => $my_answers
        ]);
    }

    /**
     * 
     *Provides users data of the specified id.
     * @param  $profile -stores users ID.
     * @return \Illuminate\Http\Response.
     */
    public function profile($profile)
    {
        $info= User::findOrFail($profile); 
        //return($profile);
        return view('profile',[
            'info' => $info
        ]);
    }

}
