<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

$apiurl = 'http://127.0.0.1:8000/v1.1/';

$m = new Monocontact('token', 'secret-token', $apiurl);

// LISTING

// try {
//     $emails = ['pablo@pablo.cl'];
//     print_r($m->listing->removeContact($emails, 997));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

// print_r($m->listing->viewFromList(997));

// try {
//     $emails = ['pablo@pablo.cl', 'tito4408@gmail.com'];
//     print_r($m->listing->addContactToList($emails, 997));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

// print_r($m->listing->searchList('lista nueva febrero'));

// try {
//     print_r($m->listing->deleteList('999'));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

// try {
//     print_r($m->listing->create([
//             "name"=> "lista nueva composer",
//             "area"=> 1
//     ]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

// print_r($m->listing->view('lista%20nueva%20febrero')); or print_r($m->listing->view('993'));
// print_r($m->listing->listing());