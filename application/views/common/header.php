<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Quantum</title>
<!-- Bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700" rel="stylesheet"> 
<link href="<?= site_url() ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?= site_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?= site_url() ?>assets/css/style.css" rel="stylesheet">




<link rel="stylesheet" href="<?= site_url() ?>assets/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?= site_url() ?>assets/owlcarousel/owl.theme.default.min.css">





</head>
<body>
 <div class="header_main">
		<div class="container">
		<div class="header_box">
		<div class="header_box1">
		 <a href="#"><img src="<?= site_url() ?>assets/images/logo.png" alt=""></a> 
		</div>
		<div class="row main_space">


		<form method="POST" action="<?=site_url('home/search') ?>">
		<div class="col-sm-7 condos1">
		<div class="condos">
		<h2>search <span>condos</span></h2>
		</div>
		<div class="row">
		<div class="col-sm-6 space">
		<div class="header_main1">
		 <div class="form-group">


<select name="minPrice" id="minPrice">
										<option value="250" disabled="">Minimum Price</option>
										<option value="100">$100,000</option>
										<option value="150">$150,000</option>
										<option value="200">$200,000</option>
										<option value="250" selected="">$250,000</option>
										<option value="300">$300,000</option>
										<option value="350">$350,000</option>
										<option value="400">$400,000</option>
										<option value="450">$450,000</option>
										<option value="500">$500,000</option>
										<option value="550">$550,000</option>
										<option value="600">$600,000</option>
										<option value="650">$650,000</option>
										<option value="700">$700,000</option>
										<option value="750">$750,000</option>
										<option value="800">$800,000</option>
										<option value="850">$850,000</option>
										<option value="900">$900,000</option>
										<option value="950">$950,000</option>
										<option value="1000">$1,000,000</option>
										<option value="1100">$1,100,000</option>
										<option value="1200">$1,200,000</option>
										<option value="1300">$1,300,000</option>
										<option value="1400">$1,400,000</option>
										<option value="1500">$1,500,000</option>
										<option value="1600">$1,600,000</option>
										<option value="1700">$1,700,000</option>
										<option value="1800">$1,800,000</option>
										<option value="1900">$1,900,000</option>
										<option value="2000">$2,000,000</option>
										<option value="2100">$2,100,000</option>
										<option value="2200">$2,200,000</option>
										<option value="2300">$2,300,000</option>
										<option value="2400">$2,400,000</option>
										<option value="2500">$2,500,000</option>
										<option value="2600">$2,600,000</option>
										<option value="2700">$2,700,000</option>
										<option value="2800">$2,800,000</option>
										<option value="2900">$2,900,000</option>
										<option value="3000">$3,000,000</option>
										<option value="3100">$3,100,000</option>
										<option value="3200">$3,200,000</option>
										<option value="3300">$3,300,000</option>
										<option value="3400">$3,400,000</option>
										<option value="3500">$3,500,000</option>
										<option value="3600">$3,600,000</option>
										<option value="3700">$3,700,000</option>
										<option value="3800">$3,800,000</option>
										<option value="3900">$3,900,000</option>
										<option value="4000">$4,000,000</option>
										<option value="4100">$4,100,000</option>
										<option value="4200">$4,200,000</option>
										<option value="4300">$4,300,000</option>
										<option value="4400">$4,400,000</option>
										<option value="4500">$4,500,000</option>
										<option value="4600">$4,600,000</option>
										<option value="4700">$4,700,000</option>
										<option value="4800">$4,800,000</option>
										<option value="4900">$4,900,000</option>
										<option value="5000">$5,000,000</option>
										<option value="10000">$10,000,000</option>
									</select>

		 
	  </div>
  
  </div>
		</div>
		<div class="col-sm-6 space">
		<div class="header_main1">
		 <div class="form-group">
		 <select name="maxPrice" id="maxPrice">
										<option value="350" disabled="">Maximum Price</option>
										<option value="150">$150,000</option>
										<option value="200">$200,000</option>
										<option value="250">$250,000</option>
										<option value="300">$300,000</option>
										<option value="350">$350,000</option>
										<option value="400">$400,000</option>
										<option value="450">$450,000</option>
										<option value="500">$500,000</option>
										<option value="550">$550,000</option>
										<option value="600">$600,000</option>
										<option value="650">$650,000</option>
										<option value="700">$700,000</option>
										<option value="750">$750,000</option>
										<option value="800">$800,000</option>
										<option value="850">$850,000</option>
										<option value="900" selected="">$900,000</option>
										<option value="950">$950,000</option>
										<option value="1000">$1,000,000</option>
										<option value="1100">$1,100,000</option>
										<option value="1200">$1,200,000</option>
										<option value="1300">$1,300,000</option>
										<option value="1400">$1,400,000</option>
										<option value="1500">$1,500,000</option>
										<option value="1600">$1,600,000</option>
										<option value="1700">$1,700,000</option>
										<option value="1800">$1,800,000</option>
										<option value="1900">$1,900,000</option>
										<option value="2000">$2,000,000</option>
										<option value="2100">$2,100,000</option>
										<option value="2200">$2,200,000</option>
										<option value="2300">$2,300,000</option>
										<option value="2400">$2,400,000</option>
										<option value="2500">$2,500,000</option>
										<option value="2600">$2,600,000</option>
										<option value="2700">$2,700,000</option>
										<option value="2800">$2,800,000</option>
										<option value="2900">$2,900,000</option>
										<option value="3000">$3,000,000</option>
										<option value="3100">$3,100,000</option>
										<option value="3200">$3,200,000</option>
										<option value="3300">$3,300,000</option>
										<option value="3400">$3,400,000</option>
										<option value="3500">$3,500,000</option>
										<option value="3600">$3,600,000</option>
										<option value="3700">$3,700,000</option>
										<option value="3800">$3,800,000</option>
										<option value="3900">$3,900,000</option>
										<option value="4000">$4,000,000</option>
										<option value="4100">$4,100,000</option>
										<option value="4200">$4,200,000</option>
										<option value="4300">$4,300,000</option>
										<option value="4400">$4,400,000</option>
										<option value="4500">$4,500,000</option>
										<option value="4600">$4,600,000</option>
										<option value="4700">$4,700,000</option>
										<option value="4800">$4,800,000</option>
										<option value="4900">$4,900,000</option>
										<option value="5000">$5,000,000</option>
										<option value="10000">$10,000,000</option>
										<option value="15000">$15,000,000</option>
									</select>
	  </div>
  
  </div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-sm-6 space">
		<div class="header_main1">
		 <div class="form-group">


		<select name="minBedroom" id="minBedroom">
			<option value="0" disabled=""># Bedrooms</option>
			<option value="0">No preference</option>
			<option value="1">1+ Bedroom</option>
			<option value="2" selected="">2+ Bedrooms</option>
			<option value="3">3+ Bedrooms</option>
			<option value="4">4+ Bedrooms</option>
			<option value="5">5+ Bedrooms</option>
		</select>

		 
	  </div>
  </div>
		</div>
		<div class="col-sm-6 space">
		<div class="header_main1">
		 <div class="form-group">

			<select name="maxBedroom" id="maxBedroom">
				<option value="0" disabled=""># Bathrooms</option>
				<option value="0">No preference</option>
				<option value="1">1+ Bathroom</option>
				<option value="2" selected="">2+ Bathrooms</option>
				<option value="3">3+ Bathrooms</option>
				<option value="4">4+ Bathrooms</option>
				<option value="5">5+ Bathrooms</option>
			</select>

	  </div>
  </div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-sm-12 space">
		<div class="header_main1">
		 <div class="form-group">
		 	<select name="PropertyType" id="search_fields_PropertyType_value" class="property">
			 	<option selected="selected" value="A">Residential</option>
				<option value="B">Residential Income</option>
				<option value="C">Land/Docks</option>
				<option value="D">Business</option>
				<option value="E">Comm/Industry</option>
				<option value="F">Rental</option>
			</select>
	  </div>
  </div>
		</div>
		</div>
		
		</div>
		<div class="col-sm-5 spaces1">
		<div class="header_square">
		<h2>most searched
         <span>neighbourhoods</span></h2>
		 <div class="searched">
			<div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Lincoln Park</span></label>
		  </div>
		  <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>River North</label>
		  </div>
		  <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Bucktown</label>
		  </div>
		    <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Logan Square</label>
		  </div>
		   <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Lakeview</label>
		  </div>
		  </div>
		  
		   <div class="searched">
		 <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Old Town</label>
		  </div>
		  <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Loop</label>
		  </div>
		  <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Gold Coast</label>
		  </div>
		    <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>West Loop</label>
		  </div>
		   <div class="checkbox">
			<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>Lincoln Square</label>
		  </div>
		  </div>
		  
		</div>
		</div>
		<button type="submit" class="btn btn-default">find my chicago condo</button>
		</form>
		</div>
		
		</div>
		
		</div>
		
		
		</div>
		<div class="header" id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
               <li>
                    <a href="javascript:void(0);" id="Login">Login</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper --> 




	  <section class="login_main">
			   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  <div class="modal-body">
			   <div class="login_box">
			   	<h2><span>cool!</span> 32 Listings</h2>
				<h3>match your search</h3>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Connect with facebook</a>
				<div class="login_form">
				 <form>
			  <div class="form-group">
				<input type="text" class="form-control" id="name" placeholder="Name">
			  </div>
			  <div class="form-group">
				<input type="email" class="form-control" id="email" placeholder="Email">
			  </div>
			  <button type="submit" class="btn btn-default">get my condos</button>
			  <a href="#">Why do we need your email?</a>
			  <div class="checkbox">
				<label><input type="checkbox"><span><i class="fa fa-check" aria-hidden="true"></i></span>I agree to the Terms of Use</label>
			  </div>
			</form> 
				
				
				</div>
			  </div>	
			  </div>
			</div>
		  </div>
		</div>
		</section>
    
