<head>
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

