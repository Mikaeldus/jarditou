<?php

$formError = Array();

$regText = '/^[a-zA-Z\-\déèàçùëüïôäâêûîô#&]+$/';
$regPost = '/^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/';
$regEmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;';

if (isset($_POST['submit'])) {
	if(!empty($_POST['nom'])){
		if(preg_match($regText, $_POST['nom'])) {
			$nom = $_POST['nom'];
		} else {
			$formError['nom'] = 'Mauvaise Saisie !!';
		}
	} else {
		$formError['nom'] = '*Champ obligatoire';
	}
	
	if(!empty($_POST['prenom'])){
		if(preg_match($regText, $_POST['prenom'])) {
			$nom = $_POST['prenom'];
		} else {
			$formError['prenom'] = 'Mauvaise Saisie !!';
		}
	} else {
		$formError['prenom'] = '*Champ obligatoire';
	}
	
	if(!empty($_POST['codePostal'])){
		if(preg_match($regPost, $_POST['codePostal'])) {
			$nom = $_POST['codePostal'];
		} else {
			$formError['codePostal'] = 'Mauvaise Saisie !!';
		}
	} else {
		$formError['codePostal'] = '*Champ obligatoire';
	}
	
	if(!empty($_POST['email'])){
		if(preg_match($regEmail, $_POST['email'])) {
			$nom = $_POST['email'];
		} else {
			$formError['email'] = 'Mauvaise Saisie !!';
		}
	} else {
		$formError['email'] = '*Champ obligatoire';
	}
}
var_dump($_FILES);
?>