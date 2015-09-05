<?php
	require_once '../core/init.php';
	// var_dump(Token::check(Input::get('token')));

	$user = new User();
	if($user->isLoggedIn() && $user->data()->group !== '3'){
		echo ' Group Number is ', $user->data()->group,  '<br>';
		echo Session::get(Config::get('session/session_name')),'<br>';
		include("global_head.php");
?>
				<body>
					<?php echo $user->data()->username, ' is Logged in', '<br>'; ?>
					<header>
						<ul>
							<li>Already login menu</li>
						</ul>
					</header>
	<?php }

		require_once '../core/init.php';
		$user = new User();
		if($user->isLoggedIn() && $user->data()->group === '3'){
			include("global_head.php");
		?>
			<body>
				<header>
					<ul>
						<li><?php echo $user->data()->username, ' is an Admin', '<br>';?></li>
					</ul>
				</header>
					 	
	<?php } 
		require_once '../core/init.php';
		$user = new User();
		if(!$user->isLoggedIn()){
			include("global_head.php");
		?>
				<body>
					<header>
						<nav class="navbar navbar-inverse navbar-fixed-top" id="top_nav" role="top_nav">
					      <div class="container">
					        <div class="navbar-header">
					          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					          </button>
					          <a href="#" class="navbar-brand">Project name</a>
					        </div>
					        <div class="navbar-collapse collapse" id="navbar">
						        <ul class="navbar-form navbar-right social-media-icon">
						            <li class="form-group">
						              	<a href="#" class="navbar-brand">
						                  	<i class="icon fa fa-google-plus"></i>
						               	</a>
						            </li>
						            <li class="form-group">
						             	<a href="#" class="navbar-brand">
					                  		<i class="icon fa fa-twitter"></i>
					                	</a>
						            </li>
						            <li class="form-group">
						             	<a href="#" class="navbar-brand">
                  							<i class="icon fa fa-facebook"></i>
					                	</a>
						            </li>
						            <li class="form-group">
						             	<a href="#" class="navbar-brand">
                  							<i class="icon fa fa-dribbble"></i>
					                	</a>
						            </li>
						        </ul>
						        <ul class="navbar-form navbar-right">
						              <li class="form-group">
						                <a href="login.php" title="Login" class="navbar-brand">
						                  <i class="icon fa fa-user fa-lg"></i>
						                  <span>Log In</span>
						                </a>
						              </li>
						              <li class="form-group">
						                <a href="register.php" title="Register" class="navbar-brand">
						                  <i class="fa fa-pencil fa-1_5x "></i>
						                  <span>Register</span>
						                </a>
						              </li>
						              <li  class="form-group">
						                <a title="View Cart" href="#" class="navbar-brand">
						                  <i class="icon fa fa-shopping-cart fa-lg"></i> 
						                  <span>View Cart</span>
						                </a>
						              </li>
						        </ul>
					        </div><!--/.navbar-collapse -->
					      </div>
					    </nav>
					    <div class="well navbar-fixed-top" role="menu">
					    	<nav id="menu_nav" class="navbar container">
					    		<!-- <div class="navbar-header">
						          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
						            <span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						          </button>
						          <a href="#" class="navbar-brand">Project name</a>
						        </div> -->
						    	<div class="row navbar-collapse collapse" id="navbar">
						    		<ul class=" navbar-form nav nav-justified col-xs-12 col-sm-8 col-lg-8">
							            <li class=" active"><a href="#">Home</a></li>
							            <li class=""><a href="#">Services</a></li>
							            <li class=" active"><a href="#">Porfolio</a></li>
							            <li class=""><a href="#">Career</a></li>
							            <li class=""><a href="#">About</a></li>
							            <li class=""><a href="#">Contact</a></li>
						          	</ul>
						          	<ul class="nav nav-justified search col-xs-12 col-sm-4 col-lg-4">
						          	<li>
						          		<form class="">
							            <div class="form-group">
							              <input type="search" class="form-control" placeholder="Search">
							              <span class=" form-control-feedback well"><i class="fa fa-search fa-1_5x "></i></span>
							            </div>
						            	<!-- <button class="btn btn-success" type="submit">Search</button> -->
						          	</form>
						          	</li>
					          		
						          	</ul>

						    	</div>
								
						    </nav>
					    </div>
					    <!-- <div class="container" role="profile">
					    	<div class="fb-profile shadow-effect">
						        <img align="left" alt="Profile image example" src="http://lorempixel.com/850/280/nightlife/5/" class="fb-image-lg">
						        <img align="left" alt="Profile image example" src="http://lorempixel.com/180/180/people/9/" class="fb-image-profile thumbnail">
						        <div class="fb-profile-text row">
						        	<div class="description col-md-offset-2">
						        		<h1>Kossivi Akakpo </h1>
						            	<p>Graphic and web Developer.</p>
						        	</div>
						            
						        </div>
					    	</div>
						</div> -->
						<div class="carousel slide" id="homepage-feature">
                <ol class="carousel-indicators">
                    <li class="" data-slide-to="0" data-target="#homepage-feature"></li>
                    <li data-slide-to="1" data-target="#homepage-feature" class="active"></li>
                    <li data-slide-to="2" data-target="#homepage-feature" class=""></li>
                    <li data-slide-to="3" data-target="#homepage-feature" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="profile">
                	<div class="fb-profile shadow-effect item">
				        <img align="left" alt="Profile image example" src="http://lorempixel.com/850/280/nightlife/5/" class="fb-image-lg">
				        <div class="fb-profile-text row">
				         <img align="left" alt="Profile image example" src="http://lorempixel.com/180/180/people/9/" class="fb-image-profile thumbnail">
				        	<div class="description col-md-offset-2">
				        		<h1>Kossivi Akakpo </h1>
				            	<p>Graphic and web Developer.</p>
				        	</div>
				        </div>
					</div>
                    <div class="item">
                        <img alt="600x480" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAHgCAYAAAB5FxNZAAAPrUlEQVR4nO3dv0pc2wLH8fskIRKRJJ5jEAchELBJE7AUq4BFStOcIoWV6YRT2AjpgqXNbex9Al8hD7NvcZicyXat/Wfym3En91N8uslyZk9gf1lrzdr/ef3tvw0AADn/eew3AADwuxFYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEF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AgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIOx/MHMjWDGmbp0AAAAASUVORK5CYII=" data-src="holder.js/600x480/auto/vine/textmode:literal">
                    </div>
                    <div class="item active">
                        <img alt="600x480" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAHgCAYAAAB5FxNZAAAPoklEQVR4nO3dTU5byQKG4V7HVYTEAJEfRMsKkWWhRFbL6kgMEEJMMmID2UA2wLw3wDwbYAVsgC2wiszOHbSc65iq8+N8Nie5z+CZmcI+HpxXVeU6f3z79J8GAICcP577DQAA/G4EFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCE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DzyujfnqzaL6CJquG/c2xqwtDa7u76r9srDtl3xdSuO1bVxv+3Xj8juqneE1dMm3z/fetZ8N2D2BBSO0yWNYuo4tKO0darPJM/5+ZsxasPU9+bwtMLsMDaxvn8pLn11qD+Ve6jpctSs+gfEQWDBSt4uj3jfbvjfZvpvHF5MPnQd5JscsPdKmbXZmyFJhH5sE1pDPvozLPtf0/vyg1y8o+75H4HkILBixh4v95vPsXTUmPs/eDV4euj8/qD4seno8b27mk8GR8rNj1mbCNlmm22Sp8Gfipe07WoblJrNMN/NJNTqvp7POc8SA5yWw4BfxcLFf3HT9M1Y3gqd+hbbJmLXN55v+3dDPUhpjk31Nq99RKoAer/bi3zuwfQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABD2Xx59uL2NftfrAAAAAElFTkSuQmCC" data-src="holder.js/600x480/auto/lava/textmode:literal">
                    </div>
                    <div class="item">
                        <img alt="600x480" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAHgCAYAAAB5FxNZAAAPv0lEQVR4nO3dPW7bSAPH4b1ALuKL+Bq+hO+QLq0b9wv3qtUGqQy42GJtGAiMuBAEGxs7gj9gvsVCWYWeISnlL5nJ+xB4OmasjwD8gTMa/vHuw98NAAA5f7z1CwAA+N0ILACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGEC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WAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAEPY/lc5UrPhztB0AAAAASUVORK5CYII=" data-src="holder.js/600x480/auto/sky/textmode:literal">
                    </div>
                    <div class="item">
                        <img alt="600x480" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAHgCAYAAAB5FxNZAAAPtklEQVR4nO3dMU4bTQPH4fcW70G4B8fgEpwhUi7gE9AjSkQXKQUNSuWGIimQoADZBGPvV/CSGHtmd23+Npt8z0pP5wz2OtL+NDue/ef+878NAAA5/3z0GwAA+NsILACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAg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LACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwv4H7GEVN+IJWrcAAAAASUVORK5CYII=" data-src="holder.js/600x480/auto/#f39017:#fff/textmode:literal">
                    </div>
                </div><!-- /.carousel-inner -->
                <!-- Carousel Controls -->
                <a data-slide="prev" href="#homepage-feature" class="left carousel-control">
                    <span class="icon fa fa-chevron-left"></span>
                </a>
                <a data-slide="next" href="#homepage-feature" class="right carousel-control">
                    <span class="icon fa fa-chevron-right"></span>
                </a>
            </div>
					</header>
			
	<?php }