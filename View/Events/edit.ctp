<?php
/*
 * View/Events/edit.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
 		<legend><?php __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_type_id');
		echo $this->Form->input('title');
		echo $this->Form->input('details');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('all_day');
		echo $this->Form->input('status', array('options' => array(
					'Scheduled' => 'Scheduled','Confirmed' => 'Confirmed','In Progress' => 'In Progress',
					'Rescheduled' => 'Rescheduled','Completed' => 'Completed'
					)
				)
			);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('View Event', true), array('plugin' => 'full_calendar', 'action' => 'view', $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'action' => 'index'));?></li>
		<li><li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
	</ul>
</div>
