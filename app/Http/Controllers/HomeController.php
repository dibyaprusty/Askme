<?php
/*
|--------------------------------------------------------------------------
| HomeController
|--------------------------------------------------------------------------
|
| controller dedicated for home page.
|
*/
namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //selects 5 latest questions.
        $questions= Question::withCount('answers')->take(5)->latest()->get();
        $my_questions= Question::where('user_id','=',auth()->id())->get();
        $my_answers= Answer::where('user_id','=',auth()->id())->get();
        $my_points= User::find(auth()->id())->points;
        //return($questions);
        //$questions= Question::paginate(2);
        return view('home',[
            'questions' => $questions,
            'my_questions' => count($my_questions),
            'my_answers' => count($my_answers),
            'my_points' => $my_points
        ]);
    }
}
