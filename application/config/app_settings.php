<?php

/*
 * This file sets out the app & environment,
 * 
 * once this has been amaneded, set up the database settings in 
 * config/{environment}/database.php and you're all set.
 * 
 * NOTE: You canfine tune the app settings firther using other config files, but
 * this takes care of the basics
 */

$app_settings = array();


//What are the domains for the environments?
$app_settings['environment'] = array
        (
            'development' => '/Applications/MAMP/htdocs/projects/_frameworks/CI_Configured_and_ready_to_go/public_html',
            //'staging' => '/tmp:/var/sites/s/staging.whosentmethis.co.uk/public_html/public_html',
            'staging' => '/var/sites/s/staging.whosentmethis.co.uk/public_html/public_html',
            'production' => '/var/sites/w/whosentmethis.co.uk/public_html',
        );

//What is the path to the system folder ('core' or 'CI_Framework') for each 
// environment?
$app_settings['system'] = array
        (
            'development' => '../',
            'staging' => '../',
            'production' => '../',
        );

//What is the path to the application folder ('application') for each 
// environment?
$app_settings['application'] = array
        (
            'development' => '../',
            'staging' => '../',
            'production' => '../',
        );

//What now?
/*
 * 1. Go to the 'development' folder and edit the first few lines of 'config.php'
 * 2. Now add the database settings in 'database.php'
 * 3. Now repeat for the 'staging' and 'production' folders
 */