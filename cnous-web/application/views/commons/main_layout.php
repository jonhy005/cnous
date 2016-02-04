<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php $this->load->view($head);?>
<body>
<div id="left"><?php $this->load->view($left);?> </div>
<div id="right"><?php $this->load->view($body);?></div>
<div id="footer"><?php $this->load->view($footer);?></div>
</body>
</html>