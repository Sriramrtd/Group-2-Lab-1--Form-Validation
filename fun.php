<?php


if(isset($_GET["submit"]))
{

$errors= array();

$firstname=$_GET["firstName"];

$lastname=$_GET["lastName"];


$phonenumber=$_GET["phoneNumber"];


$age=$_GET["age"];



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




}

?>