<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="icon" type="image/png" href="/edsa-cnous-web/images/icon/logoIcone32.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php 
$this->load->view("commons/cssImports");
$this->load->view("commons/javascriptImports");
$this->load->helper('url');
?>
<title>	
<?php 
echo $this->lang->line($title); 
?>
</title>
<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->
</head>
<body>
	<div class="container" >
		<?php 
			$clazz="main";
			if($removeBackground){
				$clazz.=" noBackground";
			}else{
				?><div id="logoMidi"><img src="/edsa-cnous-web/images/icon/logo_midi.png" /></div><?php
			}
		?>
		<div class="head"><?php $this->load->view($head);?></div>
		<div class="left"><?php $this->load->view($left);?></div>
		
		<div class="<?php echo $clazz;?>">
			<?php $this->load->view($body);?>
			<div>
				<?php echo form_open('action/toogleEditMode'); ?>
					<input type="hidden" name="id" id="pageNameId" value="<?php echo  $textData->ID; ?>"/>
					<input type="hidden" name="editMode" id="editModeId" value="<?php echo  $editMode?"false":"true";  ?>"/>
					<input type="submit" value="<?php echo  $editMode?"visionner":"modifier";  ?>"/>
				</form>
			</div>
		</div>
	</div>
</body>
</html>