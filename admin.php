<?php 
	include("includes/header.php"); 

	if ($_SESSION['login_admin'] != 'true')
		{
    header("Location: login.php");
    die();
	}
?>
  <div class="container">
  <div class="row">
    <div class="col-md-6 has-margin-bottom">
      <form id="phpcontactform" role="form">
        <div class="form-group">
          <label>SUBJECT</label>
          <input type="text" class="form-control" name="subject" id="name">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" rows="5" name="message" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Send message</button>
        <span class="help-block loading"></span>
      </form>
    </div>
     </div>
  </div>


<?php
	include_once("includes/footer.php"); 
?>