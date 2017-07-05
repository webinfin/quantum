<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="modal fade" id="Bemodal" tabindex="-1" role="dialog" aria-labelledby="Bemodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Bemodal">COOL! 180 LISTINGS MATCH YOUR SEARCH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<?php
if($error!="") {
?>
<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> <?=$error ?>
</div>
<?php
}
?>



		 <form method="post" action="<?= site_url('home/search') ?>">
		  <div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" required="required" placeholder="Enter Your Name" class="form-control" id="name" name="name">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required" placeholder="Enter Email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="phone">Phone:</label>
		    <input type="text" required="required" pattern="[789][0-9]{9}" placeholder="Enter Phone" class="form-control" id="phone" name="phone">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

