<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

$apiurl = 'http://127.0.0.1:8000/v1.1/';

$m = new Monocontact('t-MduXc11yE5IHD4a5cVt8x4aaG', 's-XxCyXLQFaT58DTSfyZrCCGwg3wIY8USJcnf59NQ7fBjcQmWBRUnNXeWejRkZFRmQH', $apiurl);

// CUSTOM FIELDS


// $search = "composer";
// print_r($m->custom_field->getCustomFieldByName($search));

// try {
//     $params = ["name"=> "composer",
//                 "type"=> 1,
//                 "enable_crm"=> 0,
//                 "default_value"=> "hola",
//                 "options"=> []
//     ];
//     print_r($m->custom_field->create($params));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

// print_r($m->custom_field->listing());

