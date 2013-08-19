 <?php $this->load->view('header'); ?>
 
 <style>
 	.device-info{
 		padding:20px;
 		text-decoration:none;
 	}
 	.device{
 		margin-bottom:25px;
 	}
 	
 </style>
 
	  <div class="row span12">
		
		<a href="#myModal" role="button" class="btn" data-toggle="modal" class="btn btn-info lead">
		  	<i class="icon-plus"></i> Add Device
		</a>
		
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Modal header</h3>
		  </div>
		  <div class="modal-body">
		    <p>One fine body…</p>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<br><br>
		    
	    <div class="thumbnails">
	    	
	    	<?php foreach ($devices as $item ): ?>
	    	<div class="span3 device thumbnail">
	    		
	    		<a alt="" style="z-index:15;position:absolute;" class="btn btn-small btn-warning">
	    			<i class="icon-cog" style="font-size:15px;"></i>
	    		</a>
	    		
	    		<img src="http://placekitten.com/300/150" style="width:100%;z-index:10;position:relative;">
	    		<div class="device-info">
		    		<h3> <?php echo $item; ?> </h3>
		    		<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
		    	</div>
	    	</div>
	    	<?php endforeach; ?>
	    	
	    	
	    </div>
	
	  </div>

 
 <?php $this->load->view('footer'); ?>