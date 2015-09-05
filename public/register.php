<!-- register.php -->
<?php
	include("templetes/header.php");
	if(Input::exists()){
		if(Token::check(Input::get('token'))){

			// echo Input::get('username');
			$validate = new Validate();
			$validation = $validate->check($_POST,  array(
				'username'=> array(
					'required'=> true,
					'min'=> 2,
					'max'=> 20,
					'unique'=> 'users'
				),
				'password'=> array(
					'required'=> true,
					'min' => 6
				),
				'password_again' =>array(
					'required'=> true,
					'matches' => 'password'
				),
				'name'=> array(
					'required'=> true,
					'min'=> 2,
					'max'=> 50
				)
			));

			if($validation->passed()){
				
				$user = new User();
				$salt = Hash::salt(32);

				try{
					$user->create(array(
						'username'=> Input::get('username'),
						'password'=> Hash::make(Input::get('password'), $salt),
						'salt'=> $salt,
						'name'=> Input::get('name'),
						'joined'=> date('Y-m-d H:i:s'),
						'group'=> 1
					));

					Session::flash('registered', 'You have been registered successfully!');
					// header('Location: index.php');
					Redirect::to('index.php');

				}catch(Exception $e){
					die($e->getMessage());
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
		<h2>Registration Form</h2>
		<form role="form" action="" method="post">
		    <div class="form-group field">
		      	<label for="username">User Name:</label>
		      	<div class="input-group"> 
                	<span class="input-group-addon">
                		<span class="glyphicon glyphicon-user"></span>
                	</span>
		      		<input type="text" class="form-control" name="username" id="username" value="<?php echo escape(Input::get('username'));?>" placeholder="Enter username">
		    	</div>
		    </div>
		    <div class="form-group field">
		      <label for="password">Password:</label>
		      <div class="input-group"> 
                	<span class="input-group-addon">
                		<span class="glyphicon glyphicon-lock"></span>
                	</span>
		      		<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
		      		</div>
		    </div>
		    <div class="form-group field">
		      <label for="password_again">Confirm Password:</label>
		      <div class="input-group"> 
                	<span class="input-group-addon">
                		<span class="glyphicon glyphicon-lock"></span>
                	</span>
		      		<input type="password" class="form-control" name="password_again" id="password_again" placeholder="confirm password">
		      		</div>
		    </div>
		    <div class="form-group field">
		      <label for="name">Your Name:</label>
		      <div class="input-group"> 
                	<span class="input-group-addon">
                		<span class="glyphicon glyphicon-user"></span>
                	</span>
		      		<input type="text" class="form-control" name="name" id="name" value="<?php echo escape(Input::get('name'));?>" placeholder="your name">
		      		</div>
		    </div>
		    <input type="hidden" class="form-control" name="token" value="<?php echo escape(Token::generate());?>">
		    <button type="submit" class="btn btn-default">Register</button>
		</form>
	</main>

	<footer>
		<p>footer</p>
					
<?php include("templetes/global_foot.php");?>