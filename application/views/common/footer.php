<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer class="main_footer">
<div class="container">
<div class="footer_logo">
<img src="<?= site_url() ?>assets/images/logo1.jpg" alt="">
</div>
<div class="row address">
<div class="col-sm-2 advisor">
<div class="footer_text">
<h2>contact us</h2>
</div>
</div>

<div class="col-sm-7 advisor1">
<div class="footer_text1">
<img src="<?= site_url() ?>assets/images/location.png" alt="">
<h3>address</h3>
</div>
<div class="footer_text">
<p>Quantum Realty Advisors, Inc.</p>
<p>4440 PGA Boulevard, Suite 308 Palm Beach Gardens, Florida 33410</p>
</div>
</div>

<div class="col-sm-3 space">
<div class="footer_text1">
<img src="<?= site_url() ?>assets/images/phone.png" alt="">
<h3>phone number</h3>
</div>
<div class="footer_text">
<p>(561) 584-8555</p>
</div>
</div>
</div>
</div>
<div class="copyright">
<p>Copyright  © Quantum Realty Advisors, Inc.  All rights reserved.</p>
</div>
</footer>
		
		







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= site_url() ?>assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
$('#Bemodal').modal('show');
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

  
  
  $("#Login").click(function(){
    $('#myModal').modal('show');
    overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
    $('#wrapper').toggleClass('toggled');
  });

  
  
  
    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

</script>








</body>
</html>
