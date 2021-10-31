<?php        
    defined('BASEPATH') OR exit('No direct script access allowed');
?>           

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">

			<!-- Sign In Form -->
            <?php echo form_open('home/login_process',"class='sign-in-htm'"); ?>
            <!-- <form class="sign-in-htm"> -->
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="u_name"  type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="u_password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="u_login">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
            <?php echo form_close(); ?>
            <!-- Sign In form  -->
            <!-- Sign U[ Form] -->
			<?php echo form_open('home/register_process',"class='sign-up-htm'"); ?>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user"  name="u_name" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="u_password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" name="u_rpassword" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" name="u_email" type="email"  class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" name="u_reg" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
                <?php echo form_close(); ?>
            <!-- Sign Up Form -->
		</div>
	</div>
</div>
