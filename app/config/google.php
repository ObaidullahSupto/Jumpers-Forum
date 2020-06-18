<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '94478566793-bejkg0vmso79n767s2a0ei0tocfn6c8n.apps.googleusercontent.com';
$config['google']['client_secret']    = 'ZkTJbORvMf7nysfCA7xqUGqh';
$config['google']['redirect_uri']     = 'http://localhost/community/user_authentication/';
$config['google']['application_name'] = 'JUMPers Forum';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();