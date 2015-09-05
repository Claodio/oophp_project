<!-- home.php -->
<?php include("templetes/header.php");
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
					
					$device->create(array(
						'serial_number'=> Input::get('serial_number'),
						'year'=> Input::get('year'),
						'bgsid'=> Input::get('bgsid')
					));

					$model->create(array(
						'model_name'=> Input::get('model_name'),
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
	
	<main class="container">
		<div class=" row well">
			<div class="list-group list-group list-group-item active">
				<h2 class="list-group-item-heading">Desktop Audi</h2>
				
			</div>
			  <h6><i class="fa fa-asterisk"></i> Indicates a required field</h6>
			<form role="form" action="" method="post">
				<fieldset class="col-lg-12 panel panel-default">
				  	<legend class="panel-heading"><i class="glyphicon glyphicon-user well"></i>  User</legend>
				  	<div class="col-lg-4">
					    <div class="form-group field has_icon">
					      <label for="surname">Surname: <i class="fa fa-asterisk"></i> </label>
					      <span class="glyphicon  glyphicon-pencil form-control-feedback well"></span>
					      <input type="text" class="form-control" name="surname" id="surname" value="<?php echo escape(Input::get('surname'));?>" placeholder="Enter your Surname">
					    </div>
				    </div>
				    <div class="col-lg-4">
					    <div class="form-group field has_icon">
					      <label for="initial">Initial:</label>
					      <span class="glyphicon  glyphicon-pencil form-control-feedback well well"></span>
					      <input type="text" class="form-control" name="initial" id="initial" value="<?php echo escape(Input::get('initial'));?>" placeholder="Enter your initial">
					    </div>
				    </div>
				    <div class="col-lg-4">
					    <div class="form-group field has_icon">
					      <label for="first_name">First Name: <i class="fa fa-asterisk"></i></label>
					      <span class="glyphicon  glyphicon-pencil form-control-feedback well"></span>
					      <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo escape(Input::get('first_name'));?>" placeholder="Enter First Name">
					    </div>
				    </div>
				</fieldset>

				<fieldset class="col-lg-12 panel panel-default">
				  	<legend class="panel-heading"><i class="fa fa-desktop well"></i> Devices</legend>
				  	<div class="col-lg-6">
					    <div class="form-group field has_icon">
					      <label for="serial_number">Serial Number: <i class="fa fa-asterisk"></i></label>
					      <span class="glyphicon glyphicon-barcode form-control-feedback well"></span>
					      <input type="text" class="form-control" name="serial_number" id="serial_number" value="<?php echo escape(Input::get('serial_number'));?>" placeholder="Enter Serial Number"><?php /*echo escape(Input::get('username'));*/?>
					    </div>
				    </div>
				    <div class="col-lg-6">
					    <div class="form-group field has_icon">
					      <label for="year">Year:</label>
					      <span class="glyphicon glyphicon-calendar form-control-feedback well"></span>
					      <select type="text" class="form-control" name="year" id="year" placeholder="Enter Year">
					      <option value="2010">2010</option>
                              <option value="2011">2011</option>
                              <option value="2012">2012</option>
                              <option value="2013">2013</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
					      </select>
					    </div>
				    </div>
				    <div class="col-lg-6">
					    <div class="form-group field has_icon">
					      <label for="model_name">Models: <i class="fa fa-asterisk"></i></label>
					      <span class="glyphicon glyphicon-menu-down form-control-feedback well"></span>
					      <select class="form-control" name="model_name" id="model_name" value="<?php echo escape(Input::get('model_name'));?>" placeholder="Enter Model Name">
                              <option value="HP DC 7900">HP DC 7900</option>
                              <option value="HP DC 7800">HP DC 7800</option>
                              <option value="HP DC 8000">HP DC 8000</option>
                              <option value="All in Ones">All in Ones</option>
                          </select>
					    </div>
				    </div>
				    <div class="col-lg-6">
					    <div class="form-group field has_icon">
					      <label for="bgsid">BGS ID: <i class="fa fa-asterisk"></i></label>
					      <span class="glyphicon glyphicon-qrcode form-control-feedback well"></span>
					      <input type="text" class="form-control" name="bgsid" id="bgsid" value="<?php echo escape(Input::get('bgsid'));?>" placeholder="Enter bgsid">
					    </div>
				    </div>
				</fieldset>

				<fieldset class="col-lg-12 panel panel-default">
				  	<legend class="panel-heading"><i class="fa fa-building-o well"></i> Building and Rooms</legend>
				  	<div class="col-lg-4">
					    <div class="form-group field has_icon">
					      <label for="building_name">Building Name: <i class="fa fa-asterisk"></i></label>
					      <span class="glyphicon glyphicon-menu-down form-control-feedback well"></span>
					      <select class="form-control" name="building_name" id="building_name" value="" placeholder="Enter Building Name">
					          <option value="Cleaver">Cleaver</option>
                              <option value="Fleay Wing">Fleay Wing</option>
                              <option value="Richards Wing">Richards Wing</option>
                              <option value="Library">Library</option>
                              <option value="Beckworth">Beckworth</option>
                              <option value="Woodbridge">Woodbridge</option>
                              <option value="WCPA">WCPA</option>
                              <option value="Hayhoe">Hayhoe</option>
                              <option value="Dart">Dart</option>
                              <option value="Adminitration">Adminitration</option>
                              <option value="Residence">Residence</option>
                              <option value="Chapel">Chapel</option>
                              <option value="Health">Health</option>
                              <option value="Hotel">Hotel</option>
                              <option value="Wigan">Wigan</option>
                              <option value="Dining">Dining</option>
                              <option value="Science">Science</option>
                              <option value="Kinsman">Kinsman</option>
                              <option value="Larritt">Larritt</option>
                              <option value="Easter Larritt">Easter Larritt</option>
                              <option value="Centennial">Centennial</option>
                              <option value="Pool">Pool</option>
                              <option value="Queenswing">Queenswing</option>
                              <option value="Ceed">Ceed</option>
                              <option value="Gym">Gym</option>
                              <option value="Junior School">Junior School</option>
                              <option value="Heinz Center">Heinz Center</option>
                              <option value="Old Grammarion Pavillion">Old Grammarioon Pavillion</option>
                              <option value="ICT">ICT</option>
                              <option value="Canteen">Canteen</option>
                          </select>
					      <?php /*echo escape(Input::get('username'));*/?>
					    </div>
				    </div>
				    <div class="col-lg-4">
					    <div class="form-group field has_icon">
						    <label for="building_location">Building Location: <i class="fa fa-asterisk"></i></label>
						    <span class="glyphicon glyphicon-menu-down form-control-feedback well"></span>
						    <select class="form-control" name="building_location" id="building_location" placeholder="Enter Building Location">
						      	<option value="Senior School">Senior School</option>
	                            <option value="Junior School">Junior School</option>
	                            <option value="Ceed">Ceed</option>
	                            <option value="Farm">Farm</option>
	                        </select>
					    </div>
				    </div>
				    <div class="col-lg-4">
					    <div class="form-group field has_icon">
					      <label for="room_number">Room Number Or Name: <i class="fa fa-asterisk"></i></label>
					      	<span class="glyphicon  glyphicon-pencil form-control-feedback well"></span>
					      <input type="text" class="form-control" name="room_number" id="room_number" value="<?php echo escape(Input::get('room_number'));?>" placeholder="Enter Room Number">
					    </div>
				    </div>
				</fieldset>
			  				    
			    <fieldset class="col-lg-12">
			    	<div class="col-lg-6">
				    	<input type="hidden" class="form-control" name="token" value="<?php echo Token::generate();?>">
				    	<button type="submit" class="btn btn-primary active btn-lg col-lg-6">Register</button>
			    	</div>
			    </fieldset>   
			</form>
		 </div>
	</main>

	<footer>
		<p>footer</p>
					
		<?php include("templetes/global_foot.php");?>	