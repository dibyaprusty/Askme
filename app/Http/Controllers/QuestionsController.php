<?php
/*
|--------------------------------------------------------------------------
| QuestionsController
|--------------------------------------------------------------------------
|
| controller responsible for question related operations.
|
*/
namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // checking for search query

        $questions= Question::latest()
        ->where('title','like','%'.request('search').'%')
        ->get();
        
        return view('question',[
            'questions' => $questions
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=request()->validate([
            'title'=>['required','min:3','max:250'],
            'body'=>['required'],
            'tag'=>['required']
        ]);
        //return $validated;

        $question= new question();
        $question->user_id=auth()->id();
        $question->title= request('title');
        $question->body= request('body');
        $question->save();

        return redirect('/questions');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $answers= Answer::where('question_id','=',$question->id)->get();
        //return($answers);
        return view('questions_single',[
            'questions' => $question,
            'answers' => $answers
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //check edit request is created by the creator or not.

        if(auth()->id() == $question->user_id)
        {
            return view('edit_question',[
                'question' => $question
            ]);
        }
        else
        {
            return abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        if(auth()->id() == $question->user_id)
        {
            request()->validate([
                'title'=>['required','min:3','max:250'],
                'body'=>['required'],
                'tag'=>['required']
            ]);
            // dump(request()->all());
            $question->user_id=auth()->id();
            $question->title= request('title');
            $question->body= request('body');
            $question->save();
    
            return redirect('/questions/' . $question->id);
        }
        else
        {
            return abort(404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        if(auth()->id() == $question->user_id)
        {
            Answer::where('question_id','=',$question->id)->delete();
            $question->delete();
            return redirect(route('activity'));
        }
        else
        {
            return abort(404);
        }   
    }
}
