<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions=Question::all();
        return response()->json(['questions' => $questions->toArray()], 200);
    }
}
