<?php $this->lang->load('contact', $this->session->userdata('lg'));?>
<div id="footer">
	<ul>
		<li>
			<p>
				<?php echo $this->lang->line('contact_mail_title')." ";?><a href="mailto:trail@nobressart.eu">trail@nobressart.eu</a><br>
				<?php echo $this->lang->line('contact_orgs_title')." ".$this->lang->line('contact_orgs_value');?>
			</p>
		</li>
	</ul>
</div>
</body>
</html>