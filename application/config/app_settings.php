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

/* Set up the project
 * 1. The local directory should be called 'projects/{domainname.co.uk}
 * 2. The staging sudomain should be staging.{domainname.co.uk}
 * 3. The production domain should be {domainname.co.uk}
 */
define('DOMAIN_NAME', 'leadfarm-staging.co.uk'); //This is used throughout the app 



/*          
 *  **IF THIS IS A STANDARD PROJECT, THEN THERE SHOULD BE NO NEED TO AMEND BELOW HERE **
 */



//What are the domains for the environments? NOTE THE PRODUCTION SOMETIMES CHANGES
$production_subdomain = substr(DOMAIN_NAME, 0, 1);  //this sif for gridhost
$app_settings['environment'] = array
        (
            'development' => '/Applications/MAMP/htdocs/projects/' . DOMAIN_NAME . '/public_html',
            'staging' => '/var/sites/s/staging.' . DOMAIN_NAME . '/public_html/public_html',
            'production' => '/var/sites/' . $production_subdomain . '/' . DOMAIN_NAME . '/public_html',
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