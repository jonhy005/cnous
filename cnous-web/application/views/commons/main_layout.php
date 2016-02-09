<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php $this->load->view($head);?>
<body>
	<div class="container">
		<?php $this->load->view($left);?> 
		<div class="main"><?php $this->load->view($body);?></div>
	</div>
</body>
</html>