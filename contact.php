<?php include_once("includes/header.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 has-margin-bottom">
      <form id="phpcontactform" role="form">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="mobile" id="mobile">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" rows="5" name="message" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Send message</button>
        <span class="help-block loading"></span>
      </form>
    </div>
    <!--// col md 9-->
    
    <div class="col-md-6 has-margin-bottom">
      <h5>OUR ADDRESS</h5>
      <div class="row">
        <div class="col-lg-6">St. Mark's Coptic Orthodox Church<br>
          530 Lehigh Station Rd. West Henrietta <br>
          NY 14586</div>
        <div class="col-lg-6">Phone: +585 500 5237<br>
          
          Email: <a href="mailto:info@stmarksofrochester.org">info@stmarksofrochester.org</a></div>
      </div>
      <hr>
      
    </div>
  </div>
</div>

<!-- LOCATION MAP -->
<div class="location-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.5886634097005!2d76.94580241532827!3d8.539252898816672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05b96edbdf3427%3A0xd8924f3f7dba4ee7!2sSt+Mary&#39;s+Orthodox+Church!5e0!3m2!1sen!2sin!4v1489255549173" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- // END LOCATION MAP  --> 
<?php include_once("includes/footer.php"); ?>