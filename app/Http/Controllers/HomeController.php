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
        //selects 3 latest questions.
        $questions= Question::take(5)->latest()->get();
        //$questions= Question::paginate(2);
        return view('home',[
            'questions' => $questions
        ]);
    }
}
