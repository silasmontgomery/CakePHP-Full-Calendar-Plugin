<?php
/*
 * View/EventTypes/view.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="eventTypes view">
<h2><?php echo __('Event Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventType['EventType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Color'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventType['EventType']['color']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Type', true), array('plugin' => 'full_calendar', 'action' => 'edit', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Event Type', true), array('plugin' => 'full_calendar', 'action' => 'delete', $eventType['EventType']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $eventType['EventType']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('Manage Event Types', true), array('plugin' => 'full_calendar', 'action' => 'index')); ?> </li>
		<li><li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events');?></h3>
	<?php if (!empty($eventType['Event'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Start'); ?></th>
        <th><?php echo __('End'); ?></th>
        <th><?php echo __('All Day'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventType['Event'] as $event):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $event['title'];?></td>
			<td><?php echo $event['status'];?></td>
			<td><?php echo $event['start'];?></td>
            <td><?php if($event['all_day'] != 1) { echo $event['end']; } else { echo "N/A"; } ?></td>
            <td><?php if($event['all_day'] == 1) { echo "Yes"; } else { echo "No"; }?></td>
			<td><?php echo $event['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'edit', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
