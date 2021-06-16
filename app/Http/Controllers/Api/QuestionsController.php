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
        //return url()->current();
        $total=Question::count();

        $page=(int)request('page');
        if(empty($page)){
            $page=1;
        }

        $limit=(int)request('limit');
        if(empty($limit)){
            $limit=3;
        }

        $offset=($limit*$page)-$limit;
        
        $div=(int)($total/$limit);
        $max_page= $total%$limit==0 ? $div : $div+1;  
        
        $next = QuestionsController::next_page($total,$limit,$page);
        $previous= QuestionsController::previous_page($total,$limit,$page);
        //$all_pages= all();

        if($page>$max_page || $page<1)
        {
            throw new PageNotFound();
        }
        else{
            $questions=Question::limit($limit)->offset($offset)->get();
            return response()->json([
                'total_questions' => $total,
                'questions' => $questions->toArray(),
                'current' => url()->full(),
                'next' => $next,
                'previous' => $previous,
            ], 200);
        }
        
    }
    public function next_page($total, $limit, $page){
        $url=url()->current();
        if(($page*$limit)<$total){
            $page+=1;
            $next_url= "$url?limit=$limit&page=$page" ;
            return $next_url;
        }
        return 'null';
    }
    public function previous_page($total, $limit, $page){
        $url=url()->current();
        if($page!=1){
            $page-=1;
            $previous_url= "$url?limit=$limit&page=$page" ;
            return $previous_url;
        }
        return 'null';
    }

    
}
