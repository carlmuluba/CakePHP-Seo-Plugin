<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
<div class="seoBlacklists form">
<?php echo $this->Form->create('SeoBlacklist');?>
	<fieldset>
 		<legend><?php __('Admin Add Seo Blacklist'); ?></legend>
	<?php
		echo $this->Form->input('ip_range_start', array('type' => 'text'));
		echo $this->Form->input('ip_range_end', array('type' => 'text'));
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save BlackList', true));?>
</div>