<link rel="stylesheet" href="<?php echo base_url(); ?>css/quizpage.css">

<body onload="loadQuestion(0)">
  <div id="quizContainer" class="container">
  <div class="title">Computer Quiz</div>
  <div id="question" class="question"></div>
  <label class="option"><input type="radio" name="option" value="1"/><spam id="opt1"></spam></label>
  <label class="option"><input type="radio" name="option" value="2"/><spam id="opt2"></spam></label>
  <label class="option"><input type="radio" name="option" value="3"/><spam id="opt3"></spam></label>
  <label class="option"><input type="radio" name="option" value="4"/><spam id="opt4"></spam></label>

  <button class="btn btn-primary next-btn" name="submit" type="submit" id="nextButton" onclick="loadNextQuestion();">Next Question</button>
  </br></br>
  </div>
 <div id="crecord" class="container"  style="display:none;">
  <div id="success"></div>
 <form name="myForm" action="" method="post">
  <div id="score" class="container result" style="display:none;">  </div>
  <button class="btn btn-primary next-btn" name="record" type="submit" id="recordResult">Record your result</button>
  <input type="text" id="uname" name="uname" placeholder="Your name" required> </input>
  <!-- <button class="btn btn-primary next-btn1" name="displaygraph" type="submit" id="displayGraph">Display Graph</button> -->
  <p class="sresult" style="color:darkcyan"> </p>
  <!-- <input type="hidden" name="result" class="container result" value="" /> -->
</form>
 </div>

</body>
