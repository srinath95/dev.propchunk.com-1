  <style>
  .error { color: red; }
  </style>
  <section id="signup-login">
  
		<div class="heading-contact" class="home-section text-center">	
				
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>LOGIN</h3>    		
	                        		</div>
									<div class="social-login">
	                        	<div class="social-login-buttons ">
		                        	<a class="btn btn-default btn-link-1-facebook center-block blue" href="<?= $link; ?>">
		                        		<i class="fa fa-facebook pull-left ip-top"></i> Facebook
		                        	</a>
									<!--
		                        	<a class="btn btn-default btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
									-->
									<br />
		                        	<a class="btn btn-default btn-link-1-google-plus center-block red" href="#">
		                        		<i class="fa fa-google-plus pull-left ip-top"></i> Google
		                        	</a>
	                        	</div>
	                        </div>
	                        		<!--
									<div class="form-top-right">
	                        	    <i class="fa fa-key"></i>
	                        		</div>
									-->
									<br />
									<br />
									<h3 class="text-center"> OR </h3>
	                            </div>
	                            <?php 
	                            	if($this->session->flashdata('put_hash')){
	                            		echo $this->session->flashdata('put_hash');
	                        		}
								?>

	                            <div class="form-bottom">
				                   <?php 
								$attributes = array('id'=>'login','name'=>'login','method'=>'POST','role'=>'form');
								echo form_open('Auth/user_login_process',$attributes);
								?>
								     <!--<form role="form" action="" method="POST" class="login-form" id="login-form" name="login-form">-->
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
											<?php 
											$attribute1 = array('type'=>'email','name'=>'EmailId1','class'=>'form-control form-email','id'=>'EmailId1','placeholder'=>'Email');
											echo form_input($attribute1);
											?>
				                        	<!--<input type="text" name="form-email" placeholder="Email" class="form-email form-control" id="form-email">-->
				                        	<span>
											<?php echo form_error('EmailId');?>
											</span>
										</div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<?php
											$attribute = array('type'=>'password','name'=>'password1','placeholder'=>'Password','class'=>'form-password form-control','id'=>'password1');
											echo form_password($attribute);
											?>
											<!--<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">-->
				                        <span><?php echo form_error('Password');?></span></div>
				                        <span><?php 
	                            	if($this->session->flashdata('login_failed')){
	                            		echo $this->session->flashdata('login_failed');
	                        		}
								?></span>
										<?php
										$attribute = array('type'=>'submit','name'=>'submit','class'=>'btn','value'=>'LOGIN','id'=>'submit');
										echo form_submit($attribute);
										?>
										
				                        <!--<button type="submit" class="btn" value="LOGIN">LOGIN</button>-->

										<div class="row">&nbsp;</div>
										<a href="#reset-form" class="row offset-1" data-toggle="collapse">Forgot Password?</a> 
				                    </form>

									<?php
									$attribute11 = array('role'=>'form','class'=>'email-reset collapse','method'=>'POST','id'=>'reset-form','name'=>'reset-form');
									echo form_open('Auth/put_hash',$attribute11); 
									?>

									<!--<form role="form" class="email-reset collapse" action="" method="POST" id="reset-form" name="reset-form" >-->
									<p >Enter the email address associated with your account and we'll email you a link to reset your password</p>
									  <div class="form-group">
				                    		<label class="sr-only" for="EmailId">Email</label>

				                    		<?php
				                    		$attribute12 = array('type'=>'email','name'=>'EmailId','placeholder'=>'EmailId','class'=>'form-email form-control','id'=>'EmailId');
				                    		echo form_input($attribute12);
				                    		?>
				                        	<!--<input type="email" name="EmailId" placeholder="Email" class="form-email form-control" id="EmailId">-->
				                        <div id="sp3"></div>
										</div>
										<?php
										$attribute13 = array('type'=>'submit','class'=>'btn','name'=>'resetbtn','value'=>'Reset Button');
										echo form_submit($attribute13);
										?>
				                        <!--<button type="submit" class="btn" name="resetbtn" >Reset Password</button>-->
	



				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>REGISTER </h3>
	                            		<p></p>
	                        		</div>
	                        		<div class="form-top-right">
									<!--
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
									-->
									<div class="social-login">
	                        	<div class="social-login-buttons text-center">
		                        	<a class="btn btn-default btn-link-1-facebook center-block blue " href="#">
		                        		<i class="fa fa-facebook pull-left ip-top"></i> Facebook
		                        	</a>
									<!--
		                        	<a class="btn btn-default btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
									-->
									<br />
		                        	<a class="btn btn-default btn-link-1-google-plus center-block red ip-top" href="#">
		                        		<i class="fa fa-google-plus pull-left ip-top"></i> Google
		                        	</a>
	                        	</div>
								<br />
								<br />
								<h3 class="text-center">OR </h3>
	                        </div>
									
	                            </div>
	                            <?php 
	                            	if($this->session->flashdata('message')){
	                            		echo $this->session->flashdata('message');
	                        		}
								?>
	                            <div class="form-bottom">
								<?php 
								$attrib = array('id'=>'register','name'=>'register','method'=>'POST','role'=>'form');
								echo form_open('Auth/new_user_registration',$attrib);
								?>
				                    <!--<form role="form" action="" method="post" class="registration-form" id="registration-form" >-->
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<?php 
											$attri = array('type'=>'text','name'=>'FirstName','class'=>'form-control form-first-name','id'=>'FirstName','placeholder'=>'First Name');
											echo form_input($attri);
											?>
											<!--<input type="text" name="form-first-name" placeholder="First Name" class="form-first-name form-control" id="form-first-name">-->
											<span></span>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<?php 
											$attr = array('type'=>'text','name'=>'LastName','class'=>'form-control form-last-name','id'=>'LastName','placeholder'=>'Last Name');
											echo form_input($attr);
											?>
											<!--<input type="text" name="form-last-name" placeholder="Last Name" class="form-last-name form-control" id="form-last-name">-->
				                        <span></span></div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<?php 
											$att = array('type'=>'text','name'=>'EmailId','class'=>'form-control form-email','id'=>'EmailId','placeholder'=>'Email');
											echo form_input($att);
											?>
											<!--<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">-->
				                        <span></span></div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-phone">Phone</label>
											<?php
											$at = array('type'=>'text','name'=>'PhoneNumber','placeholder'=>'Phone','class'=>'form-phone form-control','id'=>'PhoneNumber');
											echo form_input($at);
											?>
				                        	<!--<input type="text" name="form-phone" placeholder="Phone" class="form-phone form-control" id="form-phone"></input>-->
				                        <span></span>
										</div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-password">Password</label>
				                        	<?php
											$a = array('type'=>'password','name'=>'password','placeholder'=>'Password','class'=>'form-password form-control','id'=>'password');
											echo form_password($a);
											?>
											<!--<input type="text" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">-->
				                           <span></span>
										   </div>
											<div class="form-group">
				                    		<label class="sr-only" for="form-confirmPassword">Confirm Password</label>
				                        	<?php
											$b = array('type'=>'password','name'=>'ConfirmPassword','placeholder'=>'Confirm Password','class'=>'form-confirmpassword form-control','id'=>'Confirmpassword');
											echo form_password($b);
											?>
											<!--<input type="text" name="form-confirmPassword" placeholder="Confirm Password" class="form-password form-control" id="form-confirmPassword">-->
				                           <span></span></div>
											<?php
										$c = array('type'=>'submit','name'=>'signup','class'=>'btn','value'=>'SIGN UP');
										echo form_submit($c);
										?>
				                        <!--<button type="submit" class="btn">SIGN UP</button>-->
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
</section>
      <br />
	  <br />
	  <br />
	  <br />
				<br />
				<br />
				<br />
				<br />
				

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
      <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"></script>


<!--script for registartion-->
<script type="text/javascript">

$.validator.setDefaults({
                submitHandler: function() {
                       console.log('submited');
                        form.submit();
                }
        });


jQuery.validator.addMethod("laxEmail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test( value );
}, 'Please enter your valid email.');



 $('form').each(function () {
       			 
                // validate signup form on keyup and submit
                 $('#register').validate({
                        rules: {
                                FirstName: "required",
                                LastName: "required",
                                EmailId: {
                                        required: true,
                                        email: true,
                                        laxEmail:true,
                                        remote: {
											        url: "<?php echo site_url('Verify/checkuser');?>",
											        type: "post",
											        data: {
											          EmailId: function() {
											            return $('#register :input[name="EmailId"]').val();
											        	}
											        }
											    }
                                },
                                PhoneNumber:{
                                        required: true,
                                        number: true
                                },
                                password: {
                                        required: true,
                                        minlength: 5
                                },
                                ConfirmPassword: {
                                        required: true,
                                        minlength: 5,
                                        equalTo: "#password"
                                }
                                
                        },
                        messages: {
                                FirstName: "Please enter your firstname",
                                LastName: "Please enter your lastname",
                                EmailId: {
                                	required:"Please enter your valid email.",
    								remote: jQuery.validator.format(" {0} is already registered.")  
                                },
                                PhoneNumber:"Please enter a valid PhoneNumber",
                                password: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long"
                                },
                                ConfirmPassword: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long",
                                        equalTo: "Please enter the same password as above"                                
                                }
                            }
                });

       
                // validate signup form on keyup and submit
                
                 $('#login').validate({
                        rules: {
                                EmailId1:{required: true,
                                	laxEmail:true
                                },
                                password1: {required: true}
                                
                        },
                        messages: {
                                
                                EmailId1: {required: "Please provide a Email Id"},
                                password1: {required: "Please provide a password"}                                
                               
                            }
                });

});
</script>
