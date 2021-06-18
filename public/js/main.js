$(function() {
    $("#paginate").hide();
});

function question(task)
{
    method="GET";
    if(task=="ques"){
        url="http://127.0.0.1:8000/api/questions";
    } 
    else{
        url=task;
    } 

    $.ajax({
        url: url, 
        type: method,
        success: function(result){

            all_question(result);
           
        }
    });
}

function all_question(result){
    $("#home_div").empty();
    var content="";
    $("#paginate").show();
    for(var i= 0; i < result.questions.length; i++){

        content += ' <div class="border text-break p-2 bg-white">'+
                    '<h2>'+result.questions[i].title+'</h2> </br>'+
                    '<p>'+result.questions[i].body + '</p></br>'+
                    '<small>'+result.questions[i].updated_at + '</small>'+
                    '</div> </br>';
                    
    }
    pages='<button type="button" class="btn btn-primary" onclick="question(\'' + result.previous + '\')">Previous</button>'+
          '<button type="button" class="btn btn-primary" onclick="question(\'' + result.next + '\')">Next</button>';
    
    $('#page_button').html(pages);
    $("#load-questions").html(content);
}
