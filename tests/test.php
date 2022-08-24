<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

// $apiurl = 'https://api.monocontact.net/v1.1/';
$apiurl = 'http://127.0.0.1:8000/v1.1/';
$m = new Monocontact('t-MduXc11yE5IHD4a5cVt8x4aaG', 's-XxCyXLQFaT58DTSfyZrCCGwg3wIY8USJcnf59NQ7fBjcQmWBRUnNXeWejRkZFRmQH', $apiurl);

// Probar listing.
// try {
//     print_r($m->contact->listing());
//     // $m->contact->listing();
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Probar view.
// try {
//     print_r($m->contact->view(2742733));
//     // $m->contact->listing();
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Ver contactos de una lista.
// try {
//     print_r($m->listing->viewFromList(991));
// }catch (Exception $e){
//     echo 'Excepción', $e->getMessage(), '\n';
// }

//Agregar contactos.
try {
    print_r($m->contact->create([
		'code' => 'pablo@pablo.cl',
        'firstname' => 'pablo',
        'lastname' => 'lopez',
        'company' => 'taller',
        'title' => 'a',
        'phone' => 920251638,
        'address' => 'caller 1',
        'city' => 'quillota',
        'region' => 'valparaiso',
        'country' => 'chile',
		//'contact' => ['email'=>'juanita.mucho.disero2@gmail.com', 'firstname'=>'Juanita', 'lastname'=>'Mucho Dinero'],
		'listing' => 993,
	]));
}catch (Exception $e){
    echo 'Excepción', $e->getMessage(), '\n';
}


