<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
use App\Exceptions\PageNotFound;

class QuestionsController extends Controller
{
    public function index()
    {
        $total=Question::count();
        $page=(int)request('page');
        $limit=3;
        $offset=($limit*$page)-$limit;
        
        $div=(int)($total/$limit);
        $max_page= $total%$limit==0 ? $div : $div+1;  
        
        if($page>$max_page || $page<1)
        {
            throw new PageNotFound();
        }
        $questions=Question::limit($limit)->offset($offset)->get();
        return response()->json(['questions' => $questions->toArray()], 200);
    }
}
