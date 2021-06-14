function question(task)
{
    if(task=="ques"){
        url="http://127.0.0.1:8000/api/questions";
        method="GET";
    }  
    $.ajax({url: url, 
        type: method,
        success: function(result){

            all_question(result);
           
        }
    });
}

function all_question(result){
    var content="";
    for(var i= 0; i < result.questions.length; i++){

        content += ' <div class="border text-break p-2 bg-white">'+
                    '<h2>'+result.questions[i].title+'</h2> </br>'+
                    '<p>'+result.questions[i].body + '</p></br>'+
                    '<small>'+result.questions[i].updated_at + '</small>'+
                    '</div> </br>';
                    
    }
    $("#home_div").empty();
    $("#home_div").html(content);
}
