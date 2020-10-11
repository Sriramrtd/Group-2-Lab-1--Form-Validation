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


$height=$_GET["height"];

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

if(!preg_match("/[0-9]{2,3}$/", $height))
{
    $errors[]="Enter the valid height";        
}




if(count($errors) === 0) {
    echo "<script>alert('Gym Registration successfull')</script>";
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }


    }

            

}

if(isset($_POST['upload'])){
    $file=$_FILES['file'];

    $fileName= $_FILES['file']['name'];
    $fileTmpName= $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed= array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
            
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }

    }else{
        echo "You cannot upload files of this type!";
    }





}

?>