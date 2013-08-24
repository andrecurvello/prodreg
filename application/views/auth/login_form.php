<?php $this->load->view('header'); ?>
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'input-block-level'
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'input-block-level'
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
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
		<h2 align="center" class="form-signin-heading">Sign In</h2>
		<?php echo form_label($login_label, $login['id']); ?>
		<?php echo form_input($login); ?>
		<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
	
	
		<?php echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password); ?>
		<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>

	
			<?php //echo form_checkbox($remember); ?>
			<?php //echo form_label('Remember me', $remember['id']); ?>
		<br>
		<input type="submit" name="submit" value="Sign In" class="btn btn-primary offset1">
		<br><br><br>
		<a href="<?php echo base_url(); ?>forgot_password" class="pull-left">Forgot password</a>
		<a href="<?php echo base_url(); ?>register" class="pull-right">Register</a>
<?php echo form_close(); ?>
 <?php $this->load->view('footer'); ?>