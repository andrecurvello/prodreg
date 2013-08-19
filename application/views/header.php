<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        font-size: 72px;
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
    </style>
	
</head>
<body>
	   
	<div class="navbar navbar-fixed-top navbar-inverse">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	      <a class="brand" href="<?php echo base_url(); ?>">ProdReg</a>
	      <div class="nav-collapse collapse">
	        <ul class="nav">
		      <li><a href="<?php echo base_url(); ?>about">Features</a></li>
		      <li><a href="#">About</a></li>		      
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
	          	<a class="btn btn-danger" href="<?php echo base_url(); ?>logout">Log Out</a>
	          <?php } ?>
	          <li class="span1"></li>
	        </ul>
			
	      </div>
	      
	       
	 
	    </div>
	  </div>
	</div>
	
              

	<div id="container" class="row-fluid span12">
	
