<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="icon" type="image/png"
	href="/cnous-web/images/icon/logoIcone32.png" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
$this->load->view ( "commons/cssImports" );
$this->load->view ( "commons/javascriptImports" );
$this->load->helper ( 'url' );
?>
<title>C'Nous</title>
</head>
<body>
	<div class="container">
		<?php
		$clazz = "main";
		if ($removeBackground) {
			$clazz .= " noBackground";
		} else {?>
			<img id="logoMidi" src="/cnous-web/images/icon/logo_midi.png" />
		<?php } ?>
		<div class="head"><?php $this->load->view($head);?></div>
		<div class="left"><?php $this->load->view($left);?></div>

		<div class="<?php echo $clazz;?>">
			<?php $this->load->view($body);?>
			
			<?php if(isset($openLogin) && $openLogin){ ?>
			<div id="dialog-form" title="Create new user">
			  <p class="validateTips">All form fields are required.</p>
			  <?php echo form_open ( 'adminAction/editMode',array("id"=>"editFormId") );?>
			    <fieldset>
			      <label for="login">Login</label>
			      <input type="text" name="login" id="login">
			      <label for="password">Password</label>
			      <input type="password" name="password" id="password" >
			      <!-- Allow form submission with keyboard without duplicating the dialog button -->
			      <input type="submit" value="log-in"/>
			    </fieldset>
			  </form>
			</div>

			<?php }?>

		</div>
	</div>
</body>
</html>