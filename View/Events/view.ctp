<?php
/*
 * View/Events/view.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Event Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $this->Html->link($event['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $event['EventType']['id'])); ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['title']; ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['details']; ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['status']; ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Start'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['start']; ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('End'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php if($event['Event']['all_day'] != 1) { echo $event['Event']['end']; } else { echo "N/A"; } ?></dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('All Day'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php if($event['Event']['all_day'] == 1) { echo "Yes"; } else { echo "No"; } ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['created']; ?></dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['modified']; ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event', true), array('plugin' => 'full_calendar', 'action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Event', true), array('plugin' => 'full_calendar', 'action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete this %s event?', true), $event['EventType']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'action' => 'index')); ?> </li>
		<li><li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
	</ul>
</div>
