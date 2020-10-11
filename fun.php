<?php


if(isset($_GET["submit"]))
{

$errors= array();

$firstname=$_GET["firstName"];

$lastname=$_GET["lastName"];


$phonenumber=$_GET["phoneNumber"];


$age=$_GET["age"];

$address=$_GET["address"];


$city=$_GET["city"];


$state=$_GET["state"];


$pincode=$_GET["pinCode"];




if(!preg_match("/[a-zA-Z]{4,30}$/", $firstname))
{
    $errors[]="Enter the valid firstname";        
}

if(!preg_match("/[a-zA-Z]{4,30}$/", $lastname))
{
    $errors[]="Enter the valid firstname";        
}

if(!preg_match("/[0-9]{10}$/", $phonenumber))
{
    $errors[]="Enter the valid phone number";        
}

if(!preg_match("/[0-9]{2}$/", $age))
{
    $errors[]="Enter the valid age";        
}

if(!preg_match("/[a-zA-Z0-9\s,.'-]{3,}$/", $address))
{
    $errors[]="Enter the valid age";        
}

if(!preg_match("/[a-zA-Z]{4,30}$/", $city))
{
    $errors[]="Enter the valid city";        
}

if(!preg_match("/[a-zA-Z]{4,30}$/", $state))
{
    $errors[]="Enter the valid state";        
}


}

?>