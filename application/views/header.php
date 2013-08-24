<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title><?php echo ( !empty($page_title) ) ? "ProdReg - ".$page_title: "ProdReg"; ?></title>
	
	
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script>
		$(function() {
		  // Setup drop down menu
		  $('.dropdown-toggle').dropdown();
		 
		  // Fix input element click problem
		  $('.dropdown input, .dropdown label').click(function(e) {
		    e.stopPropagation();
		  });
		});
	</script>
	 <style type="text/css">
      #container{
      	margin-top:60px;
      }
      
      body {
        padding-top: 0px;
        padding-bottom: 40px;
        background-color:#f9f9f9;
      }
	
      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 52px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 19px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
	
    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 40px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-left:50px;
      padding-top: 10px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    
    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 35px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }
	.featurette-icon{
      	font-size:150px;
      }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-icon{
      	font-size:150px;
      }
    }


    @media (max-width: 767px) {

   
      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }
	
		.navbar-fixed-top{
			position: fixed;
		    z-index: 1030;
		    top: 10px;
		    padding-left:15px;
		    padding-right:15px;
		}
    }
    
      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .under-jumbotron-icons{
      		font-size:50px;
      		opacity:.85;
      	}

</style>
 	 
 	 
</head>
<body>
	   
	<div class="navbar navbar-inverse navbar-fixed-top" style="">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	      <a style="font-weight:900;
			font-size:2em;
			color:white;" class="brand" href="<?php echo base_url(); ?>">ProdManage</a>
	      <div class="nav-collapse collapse">
	        <ul class="nav">
		      <li><a href="<?php echo base_url(); ?>features">Features</a></li>
		      <?php if (!$this->tank_auth->is_logged_in()): ?>
		      <li><a href="<?php echo base_url(); ?>register">Register!</a></li>
		      <?php endif; ?>		      
	        </ul>
	        <ul class="nav pull-right">
	         <?php if( !$this->tank_auth->is_logged_in() ) { ?>
	          <a href="<?php echo base_url(); ?>login" class="btn btn-info hidden-desktop">Sign In</a>
	          <li class="dropdown visible-desktop">	
	            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
	            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;background:#1b1b1b;">
	              	<form action="<?php echo base_url(); ?>login" method="post" accept-charset="UTF-8">
					  <input id="login" nstyle="margin-bottom: 15px;" type="text" name="login" size="30" placeholder="Username" />
					  <input id="password" style="margin-bottom: 15px;" type="password" name="password" size="30" placeholder="Password" />
					  <br>
					  <input id="remember" style="float: left; margin-right: 10px;" type="checkbox" name="remember" value="1" />
					  <label class="string optional" style="color:white;" for="remember"> Remember me</label>
					  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
					</form>
	            </div>
	          </li>
	          <?php } else{ ?>
	          	<a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>logout">Log Out</a>
	          <?php } ?>
	          <li class="span1"></li>
	        </ul>
			
	      </div>
	      
	       
	 
	    </div>
	  </div>
	</div>
	
              

	<div id="container" class="row span12">
	
