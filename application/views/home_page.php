<?php $this->load->view('header'); ?>
 	 
 	  <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
	  <div class="jumbotron">
        <h1>ProdManage</h1>
        <h3>Your personal gadget dashboard!</h3>
        <p class="lead">
        	 Add and track everything from your iPhone to your Car <i class="icon-car"></i>. <br>
        	 Store warranty info, pictures, notes, and get notified of any updates or news on your products. 
        </p>
        
        <a class="btn btn-large btn-success" href="<?php echo base_url(); ?>register">Sign Up Today <i class="icon-chevron-right"></i></a>
      </div>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <div class="under-jumbotron-icons">
          	<i class="icon-mobile-phone"></i>
          	<i class="icon-tablet"></i>
          	<i class="icon-desktop"></i>
          </div>
          <h2>Register Products</h2>
          <p>Add your gadgets, devices, and other cool toys to your ProdManage dashboard.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <div class="muted text-warning under-jumbotron-icons">
          	<i class="icon-edit-sign"></i>
          </div>
          <h2>Track History</h2>
          <p>Attach images of receipts, notes, links, or a love note to your iPhone! </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <div class="muted text-info under-jumbotron-icons">
          	<i class="icon-envelope"></i>
          </div>
          <h2>Get Notified</h2>
          <p> Receive notifications of updates for your device, warranty expirations, recalls.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
 
 <?php $this->load->view('footer'); ?>