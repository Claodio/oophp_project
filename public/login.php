<!-- login.php -->
<?php
	include("templetes/header.php");
	if(Input::exists()){
		if(Token::check(Input::get('token'))){
			$validate = new Validate();
			$validation = $validate->check($_POST,  array(
				'username'=> array(
					'required'=> true,
					'min'=> 2,
					'max'=> 20
				),
				'password'=> array(
					'required'=> true,
					'min' => 6
				)
			));

			if($validation->passed()){
				// log user in
				$user = new User();

				$reset_password = (Input::get('reset_password') === 'on') ? true : false;
				$remember = (Input::get('remember') === 'on') ? true : false;
				$login = $user->login(Input::get('username'), Input::get('password'),$remember,$reset_password);				
				
				if($login){
					Session::flash('login_sucess', 'You are now login');
					Redirect::to('index.php');
				}else{
					// Session::flash('login_failled', 'Sorry login fail!');
					echo "<p>Sorry login fail</p>";
				}

			}else{
				// print_r($validation->errors());
				foreach ($validation->errors() as $error) {
					echo $error, '<br>';
				}
			}
		}
	}
?>
<body>
	<main class="container">
		<form role="form" action="" method="post">
		  	<fieldset class="col-lg-6 panel panel-default col-lg-offset-3">
				<legend class="panel-heading"><i class="fa fa-user well"></i> login</legend>
			    <div class="form-group field col-lg-10 col-lg-offset-1 has_icon">
			      <label for="username">Username:</label>
			      <span class=" form-control-feedback well"><i class="fa fa-pencil fa-1_5x "></i></span>
			      <input type="text" class="form-control" name="username" autocomplete= "off" id="username" value="<?php echo escape(Input::get('username'));?>" placeholder="Enter username">
			    </div>
			    <div class="form-group field col-lg-10 col-lg-offset-1 has_icon">
			    	<label for="password">Password:</label>
			    	<span class=" form-control-feedback well"><i class="fa fa-key fa-1_5x "></i></span>
			      	<input type="password" class="form-control" name="password" autocomplete= "off" id="password" placeholder="Enter password">
			    </div>

			    <div class="form-group field col-lg-10 col-lg-offset-1 has_icon check">
				    <div class="form-group field col-lg-6">
				    	<label for="remember" class="col-lg-12 col-xs-12">
					    	<i class="remember" >remember me</i> 
					    	<span class=" form-control-feedback well fa fa-check-square-o">
					    	</span>
					      	<input type="checkbox" class="form-control  form-control-feedback well" name="remember" id="remember" >
				      	</label>
				    </div>
					<div class="form-group field col-lg-6">
				      	<label for="reset_password" class="col-lg-12 col-xs-12"> 
					      	<i class="reset_password" >reset password</i>
					    	<span class=" form-control-feedback well  fa fa-square-o">
					    	</span>
					      	<input type="checkbox" class="form-control  form-control-feedback well" name="reset_password" id="reset_password" >
				      	</label>
				    </div>
			    </div>
			    <input type="hidden" class="form-control" name="token" value="<?php echo Token::generate();?>">
			    <div class="form-group field col-lg-10 col-lg-offset-1">
			    	<button type="submit" class="btn btn-default btn-lg col-lg-4">Login</button>
			    </div>
			</fieldset>
		</form>
	</main>
	<footer>
		<p>footer</p>
					
		<?php include("templetes/global_foot.php");?>