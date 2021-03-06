<?php

require('../Classes/customer_class.php');


function addCustomer_c($name, $email, $pass, $country, $city, $contact){

	// create an instance of the Product Class
	$customer_instance = new Customer();

	// call the method from the class
	$x = $customer_instance->addCustomer($name, $email, $pass, $country, $city, $contact);
	if($x){
		return true;
	}

	return false;

}

function checkEmail_c($email){

	$customer_instance = new Customer();

	$x = $customer_instance->checkEmail($email);
	if($x){
		return true;
	}

	return false;
}

function getCustomerDetails_c($email){

	$customer_instance = new Customer();

	$x = $customer_instance->checkEmail($email);
	if($x){
		return $x;
	}

	return false;
}

function login_c($email, $pass){
	$customer_instance = new Customer();

	$x = $customer_instance->login($email,$pass);
	if($x){
		return true;
	}

	return false;
}



function updateCustomer_c($name, $email, $pass, $country, $city, $contact, $id){

	// create an instance of the Product Class
	$customer_instance = new Customer();

	// call the method from the class
	$x = $customer_instance->updateCustomer($name, $email, $pass, $country, $city, $contact, $id);

	if($x){
		return true;
	}

	return false;
	
}



function deleteCustomer_c($id){

	// create an instance of the Product Class
	$customer_instance = new Customer();

	// call the method from the class
	$x = $customer_instance->deleteCustomer($id);

	if($x){
		return true;
	}

	return false;
	
}







?>