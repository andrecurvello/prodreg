 <?php $this->load->view('header'); ?>
 
 <link href="<?php echo base_url(); ?>assets/date-picker.css" rel="stylesheet">	
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/date-picker.js"></script>
 
 <style>
 	.device-info{
 		padding:20px;
 		padding-top:10px;
 		text-decoration:none;
 	}
 	.device{
 		margin-bottom:25px;
 		-webkit-box-shadow: 7px 7px 5px rgba(50, 50, 50, 0.75);
		-moz-box-shadow:    7px 7px 5px rgba(50, 50, 50, 0.75);
		box-shadow:         7px 7px 5px rgba(50, 50, 50, 0.75);
 	}
 	
 </style>
 
	  <div class="row-fluid span12">
		
		<a href="#addDeviceModal" role="button" class="btn btn-large btn-primary" data-toggle="modal" class="btn btn-info lead">
		  	<i class="icon-plus"></i> Add Device
		</a>
		
		<div id="addDeviceModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
		 style="border:5px solid teal;">
		  
		  <form class="form-horizontal" style="margin:7px;" action="#" method="POST">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<fieldset style="padding:30px;">
			
				<div class="control-group">
				  <label class="control-label" for="device-name">Device Name</label>
				  <div class="controls">
				    <input id="device-name" name="device-name" class="input-large" type="text">
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="purchase-date">Purchase Date</label>
				  <div class="controls">
				    <input id="purchase-date" name="purchase-date" data-datepicker-format="mm/dd/yyyy" data-datepicker-nodefault="false" type="text">
				  </div>
				</div>
				
				<br>
				<div class="controls">
				 <input type="submit" class="btn btn-primary" value="Add to List">
				</div>
				
			
			</fieldset>
		  </form>
			
		</div>
		<br><br>
		    
	    
	    <div class="thumbnails">
	    	<?php $loop_counter = 0;
	    		  foreach ($devices as $item ):
					  $loop_counter +=1; 
	    	?>
			    	<div class="span3 device thumbnail">
			    		<a alt="" style="z-index:15;position:absolute;" class="btn btn-small btn-warning">
			    			<i class="icon-cog" style="font-size:15px;"></i>
			    		</a>
			    		<img src="<?php echo $item['image']; ?>" style="width:100%;z-index:10;position:relative;">
			    		<div class="device-info">
				    		<h3> <?php echo $item['name']; ?> </h3>
				    		<p><?php echo substr($item['description'], 0,100); ?>...<br><sup><a href="#">Read more >></a></sup></p>
				    		<div class="labels">
				    			<div class="label label-info">Days Owned: 25</div><br>
				    			<?php (($item['warranty_in_days']-100)>0)? '<div class="label label-warning">Warranty Expires Soon</div>':''; ?>
				    		</div>
				    	</div>
			    	</div>
	    		<?php 
	    			echo ($loop_counter%3 == 0 )? '</div><div class="clearfix"></div><div class="thumbnails">':'';
	    	 	endforeach; 
	    	 	?>
	    	 	</div>
	    		
	    </div>
	
	  </div>

 
 <?php $this->load->view('footer'); ?>