<?php
/*
 * Model/EventType.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class EventType extends FullCalendarAppModel {
	var $name = 'EventType';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);

	var $hasMany = array(
		'Event' => array(
			'className' => 'FullCalendar.Event',
			'foreignKey' => 'event_type_id',
			'dependent' => false,
		)
	);

}
?>
