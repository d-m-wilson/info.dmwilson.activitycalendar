SELECT @domain_id := min(id) FROM civicrm_domain;
SELECT @administerID    := MAX(id) FROM civicrm_navigation where name = 'Contacts';
SELECT @adminCampaignWeight := MAX(weight)+1 FROM civicrm_navigation where parent_id = @administerID;

INSERT INTO civicrm_navigation
    ( domain_id, url, label, name, permission, permission_operator, parent_id, is_active, has_separator, weight )
VALUES     
    ( @domain_id,'civicrm/showactivities', 'Show Activities Calendar', 'Show Activities Calendar', 'view all activities', 'AND', @administerID, '1', NULL, @adminCampaignWeight );

SELECT @domain_id := min(id) FROM civicrm_domain;
SELECT @administerID    := MAX(id) FROM civicrm_navigation where name = 'Customize Data and Screens';
SELECT @adminCampaignWeight := MAX(weight)+1 FROM civicrm_navigation where parent_id = @administerID;

INSERT INTO civicrm_navigation
    ( domain_id, url, label, name, permission, permission_operator, parent_id, is_active, has_separator, weight )
VALUES     
    ( @domain_id,'civicrm/activitycalendarsettings', 'Activity Calendar Settings', 'Activity Calendar Settings', 'administer CiviCRM', 'AND', @administerID, '1', NULL, @adminCampaignWeight );
