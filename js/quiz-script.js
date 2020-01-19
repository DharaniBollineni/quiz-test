var currentQuestion =0;
var score = 0;
var totQuestions = questions.length; //*

//access the element
var container =document.getElementById("quizContainer");
var questionEl =document.getElementById('question');
var opt1= document.getElementById('opt1');
var opt2= document.getElementById('opt2');
var opt3= document.getElementById('opt3');
var opt4= document.getElementById('opt4');
var nextButton= document.getElementById('nextButton');
var resultCont= document.getElementById('score');

function loadQuestion(questionIndex){
    var q= questions[questionIndex];
    questionEl.textContent =(questionIndex + 1) +'. '+q.question;
    opt1.textContent= q.option1;
    opt2.textContent= q.option2;
    opt3.textContent= q.option3;
    opt4.textContent= q.option4;
};

function loadNextQuestion(){

    
    var selectedOption = document.querySelector('input[type=radio]:checked'); // check whether option is selected or not 
    // not selected any option
    if(!selectedOption){
        alert('Please select your answer!');
        return;
    }

    var answer=selectedOption.value;
    if(questions[currentQuestion].answer==answer) // value from the selected option and value from questions.js is compared
    {
        score+=10;
    }
    selectedOption.checked=false;   
    currentQuestion++; // for questionIndex++
    if(currentQuestion == totQuestions - 1)
    {
        nextButton.textContent="Finish"; // last question change button text to finished
    }
    if(currentQuestion == totQuestions){ //last question 
        container.style.display='none';
        resultCont.style.display='';
        crecord.style.display='';
        resultCont.textContent='Your score: '+score;
        // var scoreToJson ={
        //     score: score
        // }
        // scoreToJson = JSON.stringify(scoreToJson);
        // scoreToJson = JSON.parse(scoreToJson);
        // console.log(scoreToJson.score)
        return;
    }
   
    loadQuestion(currentQuestion);
}

/*$('#nextButton').submit(function(e) {
   e.preventDefault();
    var uname = $('#uname').val();
    var score = $('#score').html();
    console.log(uname);
    console.log(score);
    $.ajax({
        type: "POST", 
        async: false, 
        url: base_url+"Home/insertRecord",
        data: {uname: uname, score: score},
        success: function(data){
            $('#inferiz').html(data);
        },
        error: function() {
            alert('error');
        }
    });     
});*/


// ajax post within jquery onclick
//https://stackoverflow.com/questions/20543722/ajax-post-within-jquery-onclick
$('#recordResult').click(function() {
    var uname = $('#uname').val();
    var score = $('#score').html();
    // console.log(score);
    $.ajax({
        async: false,
        // in insert record into Db using home-->method insertRecord into model quiz_model.php
        
        data: {uname: uname, score: score},  
        type: "POST",
        url: 'http://localhost/quiz-test/index.php/Home/insertRecord', 
        // success: function(data) {
        //     $('#success').html('Your Record Inserted Successfully');
        //     window.setTimeout(function() {
        //         location.reload()
        //     },6000);
        // },
        // error: function() {
        //     $('#error').html('OOPS..!Something went wrong');
        //     // alert('error');
        // }
    });
});








