<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

// $apiurl = 'https://api.monocontact.net/v1.1/';
$apiurl = 'http://127.0.0.1:8000/v1.1/';
$m = new Monocontact('TOKEN', 'TOKEN SECRET', $apiurl);


//Métodos get

// print_r($m->listing->listing());
// print_r($m->listing->getByName('Todos los contactos'));
// print_r($m->contact->getContactFieldByName('test packagist'));
// print_r($m->listing->view(1));
// print_r($m->listing->viewFromList(995));
// print_r($m->contact->viewContactsFields());

// // Probar métodos con error.
// function testListing($m){
//     try {
//         return $m->listing->listing();
//     }catch (Exception $e){
//         echo 'Excepción', $e->getMessage(), '\n';
//     }
// }


//Métodos POST 

//Agregar subscriber nuevo.
// try{
//     print_r($m->subscriber->subscriberCreate([
//             "contacto"=> ["code"=>"pablo@php.cl",
//             "firstname"=> "pablo",
//             "lastname"=> "pablo",
//             "company"=> "pablo",
//             "title"=> "pablo",
//             "phone"=> 123,
//             "address"=> "pablo",
//             "city"=> "pablo",
//             "region"=> "valparaiso",
//             "country"=> "chile",],
//             "listing"=> "string"
//     ]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Delete subscriber nuevo.
try{
    print_r($m->subscriber->deleteSubscriber([
            "contacto"=> "pablo@php.cl",
            "listing"=> "string"
    ]));
}catch (Exception $e){
    echo 'Excepción', $e->getMessage(), '\n';
}

//Agregar contacto personalizado.
// try {
//     print_r($m->contact->createContactField([
//             "name"=> "test packagist",
//             "type"=> 1,
//             "enable_crm"=> 0,
//             "default_value"=> "test",
//             "options"=>['_1'=>1]
//     ]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Agregar campos personalizados a un contacto, funciona con multiples contactos.
// try {
//     //Un solo contacto
//     print_r($m->contact->addContactField([
//             [
//                 "id"=> 2742792,
//                 "fields"=> ["_1"=>"20481768-5"]
//             ]
//     ]));

//     //Multiple contactos.
//     print_r($m->contact->addContactField([
//         [
//             "id"=> 2742792,
//             "fields"=> ["_1"=>"20481768-5"]
//         ],
//         [
//             "id"=> 2742791,
//             "fields"=> ["_2"=>"20481768-6"]
//         ]
// ]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Modificar campo personalizado de un contacto
// try {
//     //Un solo contacto
//     print_r($m->contact->updateContactFieldFromContact([
            
//             "id"=> 2742792,
//             "fields"=> ["_1"=>"1111111-1"]
            
//     ]));

// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Agregar contactos.
// try {
    // print_r($m->contact->create([
	// 	'code' => 'pablo@pablo.cl',
    //     'firstname' => 'pablo',
    //     'lastname' => 'lopez',
    //     'company' => 'taller',
    //     'title' => 'a',
    //     'phone' => 920251638,
    //     'address' => 'caller 1',
    //     'city' => 'quillota',
    //     'region' => 'valparaiso',
    //     'country' => 'chile',
	// 	'listing' => 993,
	// ]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Agregar lista
// try {
//     print_r($m->listing->create([
// 		'name' => 'lista desde composer',
//         'area' => 3
// 	]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Agregar subscriber con lista
// try {
//     print_r($m->subscriber->createWithList([
// 		'code' => 'pablo@pablo.cl',
//         'listing' => 'lista desde composer'
// 	]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Agregar multiple subscribers
// try {
//     print_r($m->subscriber->createMultipleWithList([
// 		'contacto' => [
//             ['code' => 'tito4408@gmail.com'], 
//             ['code' => 'johnodomg35@gmail.com'], 
//             ['code' => 'pablo.sepulve@gmail.com']],
//         'listing' => 'lista desde composer'
// 	]));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }
