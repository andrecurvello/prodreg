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
 		padding:10px;
 		
		-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.3);
		box-shadow: 0 0 5px rgba(0,0,0,0.3);
		opacity:.9;
		
		-webkit-transition: opacity 1s,left .3s,top .3s,width .3s,height .3s;
		-moz-transition: opacity 1s,left .3s,top .3s,width .3s,height .3s;
		-o-transition: opacity 1s,left .3s,top .3s,width .3s,height .3s;
		transition: opacity 1s,left .3s,top .3s,width .3s,height .3s;
		
		-webkit-transition: box-shadow .7s;
		-moz-transition: box-shadow .7s;
		-o-transition: box-shadow .7s;
		transition: box-shadow .7s;
		
 	}
 	.device:hover{
 		opacity:1;
 		
 		
 		background: #FFF;
		cursor: pointer;
		
		-webkit-box-shadow: -1px -1px 21px rgba(50, 50, 50, 0.75);
		-moz-box-shadow:    -1px -1px 21px rgba(50, 50, 50, 0.75);
		box-shadow:         -1px -1px 21px rgba(50, 50, 50, 0.75);
 	}
 	.device_icon{
 		font-size:35px;
 	}
 </style>
 
	  <div class="row-fluid span12">
		
		<a href="#addDeviceModal" role="button" class="btn btn-large btn-primary" data-toggle="modal" class="btn btn-info lead">
		  	<i class="icon-plus-sign"></i> Add Device
		</a>
		
		<!-- Add Device Modal -->
		<div id="addDeviceModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
		 style="border:5px solid teal;">
		  
		  <!-- Add Device Form -->
		  <form class="form-horizontal" id="add_device" style="margin:7px;" action="<?php echo base_url(); ?>user/POST_add_device" method="POST">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<fieldset style="padding:30px;">
			
				<div class="control-group">
				  <label class="control-label" for="device">Device Name</label>
				  <div class="controls">
				    <select id="device" name="device" class="input-large" required="true">
				  <?php foreach ($available_devices as $item ):
					  		$loop_counter +=1; ?>
					  	<option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>	
					  		
				<?php	endforeach; ?> 
				    </select>
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
		  </form><!-- END Add Device Form -->	
		</div><!-- END Add Device Modal -->
		<br><br>
		    
	    
	    <div class="thumbnails">
	    	<?php $loop_counter = 0;
	    		  foreach ($my_devices as $item ):
					  $loop_counter +=1; 
	    	?>
			    	<div class="span3 device thumbnail">
			    		<div alt="" style="z-index:15; margin-right:-10px;margin-top:-10px;" class="btn btn-small pull-right">
			    			<i class="icon-cog" style="font-size:15px;"></i>
			    		</div>
			    		<br>
			    		<div class="device-info">
				    		<h3 class="lead">
				    			<i class="device_icon <?php echo $item['image']; ?>"></i> 
				    			<?php echo $item['name']; ?> 
				    		</h3>
				    		<p><?php echo substr($item['description'], 0,100); ?>...<br><sup><a href="#">Read more >></a></sup></p>
				    		<div class="labels">
				    			<div class="label label-info">Days Owned: <?php echo  floor((time()-strtotime( $item['date_purchased']))/86400); ?></div><br>
				    			<div class="label label-info">Warranty Days Left: 
				    				<?php echo $item['warranty_in_days']- (int) ((time()-strtotime( $item['date_purchased']))/86400); ?>
				    			</div><br>
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

 
 <?php 
 $data['load']='<script src="'.base_url().'assets/user_functions.js"></script>';
 $this->load->view('footer',$data); 
 
 ?>