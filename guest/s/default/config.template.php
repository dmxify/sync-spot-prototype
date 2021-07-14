<?php

$controller = [
  'user'=>'{user}', //the user name for access to the UniFi Controller
  'password'=>'{password}', //the password for access to the UniFi Controller
  'url'=>'{url}', //full url to the UniFi Controller, eg. 'https://22.22.11.11:8443'
  'version'=> '6.1.71', //controller firmware version
  'site_id'=>'erhv59hz', //Site ID found in URL (https://1.1.1.1:8443/manage/site/<site_ID>/devices/1/50)
  'debug'=>false,
  'duration'=>1440  //Duration of authorization in minutes
];