<!-- index.php -->
<?php
	include("templetes/header.php");
	if(Session::exists('registered')){
		echo '<p>' .Session::flash('registered') . '</p>';
	}
	if(Input::exists()){
		if(Token::check(Input::get('token'))){

			// echo Input::get('surname');
			$validate = new Validate();
			$validation = $validate->check($_POST,  array(
				'surname'=> array(
					'required'=> true,
					'min'=> 2,
					'max'=> 32
				),
				'initial'=> array(
					// 'required'=> true,
					'min'=> 1,
					'max'=> 1
				),
				'first_name'=> array(
					'required'=> true,
					'min'=> 2,
					'max'=> 32
				),
				'serial_number'=> array(
					'required'=> true,
					'min'=> 32,
					'max'=> 32,
					// 'int'=> 'devices',
					'unique'=> 'devices'
				),
				'year'=> array(
					'required'=> true
				),
				'model_name'=> array(
					'required'=> true,
				),
				
				'bgsid'=> array(
					// 'int'=> 'devices',
					'required'=> true,
					'unique'=> 'devices'
				),
				'building_name'=> array(
					'required'=> true
				),
				'building_location'=> array(
					'required'=> true
				),
				'room_number'=> array(
					// 'int'=> 'devices',
					'required'=> true,
					'unique'=> 'rooms'
				)
			));

			if($validation->passed()){
				
				$user = new User();
				$model = new Model();
				$device = new Device();
				$building = new Building();
				$room = new Room();
	

				try{
					$user->create(array(
						'surname'=> Input::get('surname'),
						'initial'=> Input::get('initial'),
						'first_name'=> Input::get('first_name')
					));
					
					$model->create(array(
						'model_name'=> Input::get('model_name'),
					));
					
					$device->create(array(
						'serial_number'=> Input::get('serial_number'),
						'year'=> Input::get('year'),
						'bgsid'=> Input::get('bgsid')
					));
					
					$building->create(array(
						'building_name'=> Input::get('building_name'),
						'building_location'=> Input::get('building_location')
					));
					
					$room->create(array(
						'room_number'=> Input::get('room_number')
					));

					Session::flash('registered', 'The data was send into the database successfully!');
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
				
<?php 
	if($user->isLoggedIn()){
?>
		<main class="container">
			<p>In the main user is log in</p>
		</main>
<?php
	}else{
?>
		<main class="container">
			<p>In the main, user is not log in</p>
		</main>
<?php } ?>

		<footer>
			<p>footer</p>			
		<?php include("templetes/global_foot.php");?>
<?php
