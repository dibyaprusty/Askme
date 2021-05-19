<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions= Question::take(4)->latest()->get();
        //$questions= Question::paginate(2);
        return view('home',[
            'questions' => $questions
        ]);
    }
}
