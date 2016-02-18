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
$this->lang->load('home', $this->session->userdata('lg'))
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
		<div id="logoMidi"><img src="/edsa-cnous-web/images/icon/logo_midi.png" /></div>
		<div class="head"><?php $this->load->view($head);?></div>
		<div class="left"><?php $this->load->view($left);?></div>
		<div class="main"><?php $this->load->view($body);?></div>
	</div>
</body>
</html>