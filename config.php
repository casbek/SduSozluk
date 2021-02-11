<?php
 require_once 'vendor/autoload.php';

if(!session_id()){
    session_start();
}

$facebook= new \Facebook\Facebook([
    'app_id'                => '446427952968626',
    'app_secret'            => 'd6e7beaa8f6fef6dabe5dd7b997d0033',
    'default_graph_version' => 'v2.10'
    
    
]);


$google_client = new Google_Client;

$google_client->setClientId('11032815347-oark32d9ni6j1fbcfpoiu56l500dop67.apps.googleusercontent.com');

$google_client->setClientSecret('8qHKbDwADbcw-5Fiht4fgP0D');

$google_client->setRedirectUri('http://sdusozluk.net/giris_yap.php');

$google_client->addScope('email');

$google_client->addScope('profile');



//session_start();
?>