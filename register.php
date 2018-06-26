<!DOCTYPE html>
<?php 
	//Allow the config
	define('_CONFIG_', true);
	
	//Require the config
	require_once "inc/config.php";
?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow" />
		
		<title>Page Title</title>
		
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />
	</head>
	<body>
		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
				<form>

    <div class="uk-margin">
        <div class="uk-inline">
            <form class="uk-form-stacked js-register">
		<h2>Register</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com" required="required">
        </div>
    </div>
	
	<div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your Password" required="required">
        </div>
    </div>

    <div class="uk-margin">
        <button class="uk-button uk-button-default" type="submit">REGISTER</button>
    </div>
    

</form>
			</div>
				</div>
				
<?php require_once "inc/footer.php" ; ?>


	</body>
</html>


