<?php

/*
 * Settings metadata file
 */
return array(
  'activitycalendar_calendar_title' => array(
    'group_name' => 'Activity Calendar',
    'group' => 'activitycalendar',
    'name' => 'activitycalendar_calendar_title',
    'title' => 'Calendar Title',
    'type' => 'String',
    'html_type' => 'text',
    'quick_form_type' => 'Element',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Activity calendar title.',
    'help_text' => '',
    'html_attributes' => array('class' => 'huge'),
  ),
  'activitycalendar_activity_past' => array(
    'group_name' => 'Activity Calendar',
    'group' => 'activitycalendar',
    'name' => 'activitycalendar_activity_past',
    'title' => 'Show Past Activities',
    'type' => 'Integer',
    'html_type' => 'checkbox',
    'quick_form_type' => 'Element',
    'default' => 1,
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Show past activities as well as current/future.',
    'help_text' => '',
  ),
  'activitycalendar_activity_month' => array(
    'group_name' => 'Activity Calendar',
    'group' => 'activitycalendar',
    'name' => 'activitycalendar_activity_month',
    'title' => 'Activities by Month',
    'type' => 'Integer',
    'html_type' => 'checkbox',
    'quick_form_type' => 'Element',
    'default' => 1,
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Show the month parameter on calendar.',
    'help_text' => '',
  ),
  'activitycalendar_activity_from_month' => array(
    'group_name' => 'Activity Calendar',
    'group' => 'activitycalendar',
    'name' => 'activitycalendar_activity_from_month',
    'title' => 'Activities from Month',
    'type' => 'String',
    'html_type' => 'text',
    'quick_form_type' => 'Element',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Show activities from how many months from current month.',
    'help_text' => '',
    'html_attributes' => array('class' => 'four'),
  ),
  'activitycalendar_activity_types' => array(
    'group_name' => 'Activity Calendar',
    'group' => 'activitycalendar',
    'name' => 'activitycalendar_activity_types',
    'title' => 'Activity Types',
    'type' => 'String',
    'html_type' => 'text',
    'quick_form_type' => 'Element',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Choose which activity types will be displayed, and how they will be colored.',
    'help_text' => '',
  ),
);