<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------
  | AUTO-LOADER
  | -------------------------------------------------------------------
  | This file specifies which systems should be loaded by default.
  |
  | In order to keep the framework as light-weight as possible only the
  | absolute minimal resources are loaded by default. For example,
  | the database is not connected to automatically since no assumption
  | is made regarding whether you intend to use it.  This file lets
  | you globally define which systems you would like loaded with every
  | request.
  |
  | -------------------------------------------------------------------
  | Instructions
  | -------------------------------------------------------------------
  |
  | These are the things you can load automatically:
  |
  | 1. Packages
  | 2. Libraries
  | 3. Helper files
  | 4. Custom config files
  | 5. Language files
  | 6. Models
  |
 */


$autoload['model'] = array(
    '_users/user',
    '_users/users_member',
    '_users/users_representation',
    '_users/users_song',
    '_users/users_songs_use',
    '_users/users_project',
    '_users/users_projects_use',
    '_users/users_projects_gender',
    
    '_notifications/notification',
    '_notifications/notifications_type'
);


/* End of file autoload.php */
/* Location: ./application/config/autoload.php */
