<?php	
	include 'app.php'; // import php files
	
	$authUser = new AuthUser(); // get auth user
	$authUser->Authenticate('Admin');
	
	Utilities::SetLanguage($authUser->Language); // set language
?>
<!DOCTYPE html>
<html>

<head>
	
<title><?php print _("Profile"); ?>&mdash;<?php print $authUser->SiteName; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!-- include css -->
<link href="<?php print FONT; ?>" rel="stylesheet" type="text/css">
<link href="<?php print BOOTSTRAP_CSS; ?>" rel="stylesheet">
<link href="<?php print FONTAWESOME_CSS; ?>" rel="stylesheet">
<link type="text/css" href="css/app.css?v=<?php print VERSION; ?>" rel="stylesheet">
<link type="text/css" href="css/messages.css?v=<?php print VERSION; ?>" rel="stylesheet">

</head>

<body data-currpage="settings">
	
<?php include 'modules/menu.php'; ?>

<!-- messages -->
<input id="msg-updating" value="<?php print _("Updating profile..."); ?>" type="hidden">
<input id="msg-updated" value="<?php print _("Porfile updated successfully"); ?>" type="hidden">
<input id="msg-updating-error" value="<?php print _("There was a problem saving the settings, please try again"); ?>" type="hidden">
<input id="msg-all-required" value="<?php print _("All fields are required"); ?>" type="hidden">
<input id="msg-match" value="<?php print _("The password must match the retype field"); ?>" type="hidden">

<section class="main">

    <nav>
        <a class="show-menu"><i class="fa fa-bars fa-lg"></i></a>
    
        <ul>
            <li class="static active"><a><?php print _("Profile"); ?></a></li>
        </ul>
        
    </nav>
    <!-- /nav -->

	
	<form class="form-horizontal" data-bind="with: user">
		
		<div class="form-group">
			<label for="firstName" class="col-lg-2 control-label"><?php print _("First Name:"); ?></label>
			<div class="col-lg-4">
				<input id="firstName" type="text" class="form-control" data-bind="value: firstName">
			</div>
		</div>
		
		<div class="form-group">
			<label for="lastName" class="col-lg-2 control-label"><?php print _("Last Name:"); ?></label>
			<div class="col-lg-4">
				<input id="lastName" type="text" class="form-control" data-bind="value: lastName">
			</div>
		</div>

		<div class="form-group">
			<label for="language" class="col-lg-2 control-label"><?php print _("Language:"); ?></label>
			<div class="col-lg-4">
				<select id="language" class="form-control" data-bind="value: language">
					<option value="en"><?php print _("English"); ?></option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="email" class="col-lg-2 control-label"><?php print _("Email:"); ?></label>
			<div class="col-lg-4">
				<input id="email" type="text" class="form-control" data-bind="value: email">
				<span class="help-block"><?php print _("Also used as the login"); ?></span>
			</div>
		</div>
		
		<div class="form-group">
			<label for="password" class="col-lg-2 control-label"><?php print _("Password:"); ?></label>
			<div class="col-lg-4">
				<input id="password" type="password" class="form-control" value="temppassword">
				<span class="help-block"><?php print _("More than 5 characters, 1 letter and 1 special character"); ?></span>
			</div>
		</div>
		
		<div class="form-group">
			<label for="retype" class="col-lg-2 control-label"><?php print _("Re-type Password:"); ?></label>
			<div class="col-lg-4">
				<input id="retype" type="password" class="form-control" value="temppassword">
			</div>
		</div>
		
    </form>
    <!-- /.form-horizontal -->
    
    <div class="actions" data-bind="with: user">
        <button class="primary-button" type="button" data-bind="click: $parent.save"><?php print _("Save"); ?></button>
    </div>

</section>
<!-- /.main -->

</body>

<!-- include js -->
<script type="text/javascript" src="<?php print JQUERY_JS; ?>"></script>
<script type="text/javascript" src="<?php print JQUERYUI_JS; ?>"></script>
<script type="text/javascript" src="<?php print BOOTSTRAP_JS; ?>"></script>
<script type="text/javascript" src="<?php print KNOCKOUT_JS; ?>"></script>
<script type="text/javascript" src="js/helper/moment.min.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/global.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/dialog.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/messages.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/viewModels/models.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/viewModels/profileModel.js?v=<?php print VERSION; ?>"></script>

</html>