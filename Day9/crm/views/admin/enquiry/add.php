<h1>Add Enquiry</h1>

<form method="post" action="index.php?page=aenquiry&m=add">
  <div class="form-group">
    <label for="company_name">Company Name</label>
    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required="required">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required="required">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
  </div>
  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No" required="required">
  </div>  
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message" required="required"></textarea>
  </div>


  <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php?page=aenquiry" class="btn btn-danger">Cancel Enquiry</a>
</form>

