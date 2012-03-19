<?php
/*
 * View/FullCalendar/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<script type="text/javascript">
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "full_calendar";
</script>
<?php
echo $this->Html->script(array('/full_calendar/js/jquery-1.5.min', '/full_calendar/js/jquery-ui-1.8.9.custom.min', '/full_calendar/js/fullcalendar.min', '/full_calendar/js/jquery.qtip-1.0.0-rc3.min', '/full_calendar/js/ready'), array('inline' => 'false'));
echo $this->Html->css('/full_calendar/css/fullcalendar', null, array('inline' => false));
?>


<div class="Calendar index">
	<div id="calendar"></div>
</div>
<div class="actions">
	<ul>
	    <li><?php echo $this->Html->link(__('New Event', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'controller' => 'events')); ?></li>
		<li><?php echo $this->Html->link(__('Manage Events Types', true), array('plugin' => 'full_calendar', 'controller' => 'event_types')); ?></li>
	</ul>
</div>
