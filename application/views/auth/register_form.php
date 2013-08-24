<?php $this->load->view('header'); ?>
<?php 
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'class' => 'input-block-level'
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'input-block-level'
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'input-block-level'
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'input-block-level'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);

$form_attributes = array('class' => 'form-signin well', 'id' => 'register_user');

?>
<?php echo form_open($this->uri->uri_string(),$form_attributes); ?>

	<h2 align="center" class="form-signin-heading">Register</h2>
	<?php if ($use_username) { ?>
	
		<?php echo form_label('Username', $username['id']); ?>
		<?php echo form_input($username); ?>
		<span class="text-error"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']].'<br><br>':''; ?></span>
	
	<?php } ?>
	<br>
		<?php echo form_label('Email Address', $email['id']); ?>
		<?php echo form_input($email); ?>
		<span class="text-error"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']].'<br><br>':''; ?></span>
	
		<?php echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password); ?>
		<span class="text-error"><?php echo form_error($password['name']); ?></span>
	
	
		<?php echo form_label('Confirm Password', $confirm_password['id']); ?>
		<?php echo form_password($confirm_password); ?>
		<span class="text-error"><?php echo form_error($confirm_password['name']); ?></span>
	
	<br>
<input type="submit" name="register" value="Register" class="btn btn-primary btn-large offset1"/>
<?php echo form_close(); ?>

 <?php $this->load->view('footer'); ?>