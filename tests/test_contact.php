<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

$apiurl = 'http://127.0.0.1:8000/v1.1/';

$m = new Monocontact('token', 'secret-token', $apiurl);

// CONTACT

// $params = ["list" => "lista nueva febrero"];
// print_r($m->contact->removeFromList($params, 'pablo@composer.cl'));

// $params = ["list" => "lista nueva febrero"];
// print_r($m->contact->addToList($params, 'pablo@composer.cl'));

// print_r($m->contact->view('2742814'));

// $search = ["firstname"=>"pablo"];
// print_r($m->contact->searchContact($search));

// try {
//     $params = ["code"=>"pablo@composer.cl", 
//         "firstname"=>"pablo",
//         "lastname"=>"composer",
//         "company"=>"taller digital",
//         "title"=>"desarrollador",
//         "phone"=>12345678,
//         "address"=>"calle 123",
//         "city"=>"quillota",
//         "region"=>"valparaiso",
//         "country"=>"chile",
//         "fields"=>["_1"=>"111"],
//         "listing"=> 1,
//     ];
//     print_r($m->contact->create($params));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

// print_r($m->contact->listing());