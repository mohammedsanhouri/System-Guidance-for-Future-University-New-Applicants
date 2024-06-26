<?php  include('header.php')?>


<div class="container">
  <nav class="row navbar navbar-light bg-light justify-content-between rounded">
    <h2>Take the Test</h2>
  </nav>
  
  <?php 
  if($_SESSION['u_test_attempt'] == 0){
    ?>
    <div class="row d-flex align-items-center justify-content-center">
     <div class="instruction-box col-12 rounded bg-light border">
      <div class="header">Some rules and tips for this test.</div>
      <div class="box-content">
        This test is called RIASEC Test. This test is used to determine the career that suits you best. The following are the instructions that you need to consider while taking up the test. Please read.<br>
        1. Click Agree if you agree to the statement, otherwise click Disagree.<br>
        2. Do not refresh the page when answering.<br>
        3. Answer the test honeslty for best results.<br>
        4. Do not rush. Always take your time when answering.<br>
        5. Only one attempt per account.
      </div>
      <div class="footer">
        <button class="start-btn btn btn-outline-primary ">Start Test</button>
      </div>
    </div>

    
    <div class="test-box col-12 rounded bg-light border"> 
      <div class="header">RIASEC TEST-Select Agree Or Disagree</div>
      <div class="box-content">
        <form action="processors/add_test_attempt.php" method="POST">
          <div class="form-group border rounded p-2">
            <h6 for="">Question 1:</h6>
            <div class="question">I like to work on cars.</div>
            <input type="radio" name="q1" value="R" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q1" value="0">
            <label for="css">Disagree</label><br>
          </div>
    
          <div class="form-group border rounded p-2">
            <h6 for="">Question 2:</h6>
            <div class="question">I am good at working independently.</div>
            <input type="radio" name="q2" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q2" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 3:</h6>
            <div class="question">I am an ambitious person. I set goals for myself.</div>
            <input type="radio" name="q3" value="E" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q3" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 4:</h6>
            <div class="question">I like to organize things, (files, desks/offices).</div>
            <input type="radio" name="q4" value="C" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q4" value="0">
            <label for="css">Disagree</label><br>
          </div>
          <div class="form-group border rounded p-2">
            <h6 for="">Question 5:</h6>
            <div class="question">I like to give speeches.</div>
            <input type="radio" name="q5" value="E" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q5" value="0">
            <label for="css">Disagree</label><br>
          </div>
          <div class="form-group border rounded p-2">
            <h6 for="">Question 6:</h6>
            <div class="question">I like to draw.</div>
            <input type="radio" name="q6" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q6" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 7:</h6>
            <div class="question">I like to build things.</div>
            <input type="radio" name="q7" value="R" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q7" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 8:</h6>
            <div class="question">I like to read about art.</div>
            <input type="radio" name="q8" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q8" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 9:</h6>
            <div class="question">I like to have clear instructions to follow.</div>
            <input type="radio" name="q9" value="C" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q9" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 10:</h6>
            <div class="question">I like to try to influence or persuade people.</div>
            <input type="radio" name="q10" value="E" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q10" value="0">
            <label for="css">Disagree</label><br>
          </div>


          <div class="form-group border rounded p-2">
            <h6 for="">Question 11:</h6>
            <div class="question">I like to lead.</div>
            <input type="radio" name="q11" value="E" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q11" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 12:</h6>
            <div class="question">I like working outdoors.</div>
            <input type="radio" name="q12" value="R" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q12" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 13:</h6>
            <div class="question">I would like to work in an office.</div>
            <input type="radio" name="q13" value="C" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q13" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 14:</h6>
            <div class="question">I am quick to take on new responsibilities.</div>
            <input type="radio" name="q14" value="R" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q14" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 15:</h6>
            <div class="question">I wouldn’t mind working 8 hours per day in an office.</div>
            <input type="radio" name="q15" value="C" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q15" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 16:</h6>
            <div class="question">I like selling things.</div>
            <input type="radio" name="q16" value="E" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q16" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 17:</h6>
            <div class="question">I enjoy creative writing.</div>
            <input type="radio" name="q17" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q17" value="0">
            <label for="css">Disagree</label><br>
          </div>
          
          <div class="form-group border rounded p-2">
            <h6 for="">Question 18:</h6>
            <div class="question">I am good at keeping records of my work.</div>
            <input type="radio" name="q18" value="C" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q18" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 19:</h6>
            <div class="question">I enjoy learning about other cultures.</div>
            <input type="radio" name="q19" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q19" value="0">
            <label for="css">Disagree</label><br>
          </div>
          
          <div class="form-group border rounded p-2">
            <h6 for="">Question 20:</h6>
            <div class="question">I like to design my room by myself.</div>
            <input type="radio" name="q20" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q20" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 21:</h6>
            <div class="question">I am a practical person.</div>
            <input type="radio" name="q21" value="R" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q21" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 22:</h6>
            <div class="question">I like putting things together or assembling things.</div>
            <input type="radio" name="q22" value="R" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q22" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 23:</h6>
            <div class="question">I am a creative person.</div>
            <input type="radio" name="q23" value="A" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q23" value="0">
            <label for="css">Disagree</label><br>
          </div>

          <div class="form-group border rounded p-2">
            <h6 for="">Question 24:</h6>
            <div class="question">I pay attention to details.</div>
            <input type="radio" name="q24" value="C" required="">
            <label for="html">Agree</label><br>
            <input type="radio" name="q24" value="0">
            <label for="css">Disagree</label><br>
          </div>



 

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
      <div class="footer flex-inline">

      </div>
    </div>
  </div>
  <?php 
}else{
  ?>
  <center>
    <div>You already take the test. Test attempt is limited once only. View your test results instead.</div>
    <a href="controller.php?page=test-result" class="btn btn-outline-primary">View Result</a>
  </center>  
  <?php 
}
?>
</div>
<script type="text/javascript">
  window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
</script>
<script src="test-assets/script.js"></script>



<?php  include('footer.php')?>