<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('users.xml');

$element = $xml->getElementsByTagName('users')->item(0);

$user = $element->getElementsByTagName('user')->item(0);
$pass = $element->getElementsByTagName('pass')->item(0);
$email = $element->getElementsByTagName('email')->item(0);


$newItem = $xml->createElement('users');

$newItem->appendChild($xml->createElement('user', $_POST['firstname']));
$newItem->appendChild($xml->createElement('pass', $_POST['lastname']));
$newItem->appendChild($xml->createElement('email', $_POST['location']));

$xml->getElementsByTagName('passwords')->item(0)->appendChild($newItem);

$xml->save('users.xml');

echo "Data has been written.";
