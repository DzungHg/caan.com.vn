<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire.
 * This config.php file was generated by the ProcessExportProfile module. 
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 3.x
 * Copyright (C) 2018 by Ryan Cramer
 *
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = true;

$config->prependTemplateFile = '_init.php';
$config->appendTemplateFile = '_main.php';
$config->useMarkupRegions = true;
$config->useFunctionsAPI = true; 


/*** INSTALLER CONFIG ********************************************************************/



/**
 * Installer: Database Configuration
 * 
 */
$config->dbHost = 'localhost';
$config->dbName = 'caancomvn_3';
$config->dbUser = 'caancomvn_can';
$config->dbPass = 'AdminCan123$';
$config->dbPort = '3306';

/**
 * Installer: User Authentication Salt 
 * 
 * Must be retained if you migrate your site from one server to another
 * 
 */
$config->userAuthSalt = '9f399cb57602ad5ea98e5931efacb40b'; 

/**
 * Installer: File Permission Configuration
 * 
 */
$config->chmodDir = '0755'; // permission for directories created by ProcessWire
$config->chmodFile = '0644'; // permission for files created by ProcessWire 

/**
 * Installer: Time zone setting
 * 
 */
$config->timezone = 'Asia/Ho_Chi_Minh';
setlocale(LC_ALL,'en_US.UTF-8');

/**
 * Installer: Admin theme
 * 
 */
$config->defaultAdminTheme = 'AdminThemeUikit';

/**
 * Installer: Unix timestamp of date/time installed
 * 
 * This is used to detect which when certain behaviors must be backwards compatible.
 * Please leave this value as-is.
 * 
 */
$config->installed = 1575940137;


/**
 * Installer: HTTP Hosts Whitelist
 * 
 */
$config->httpHosts = array('new3.caan.com.vn', 'caan.com.vn');

