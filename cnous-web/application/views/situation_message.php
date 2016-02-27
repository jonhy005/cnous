<?php if($editMode){ ?>
	<?php echo form_open('action/submitText'); ?>
	<input type="hidden" name="id" id="pageNameId" value="<?php echo  $textData->ID; ?>"/>
	<textarea name="content" id="content" >
<?php }?>

<?php echo $textData->TEXT; ?>

<?php if($editMode){ ?>
	</textarea>
	<?php echo display_ckeditor($ckeditor); ?>
</form>
<?php }?>
