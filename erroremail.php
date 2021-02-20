<?php
session_start();

$MsgError="";
$MsgSuccess="";


    if(empty($_POST['name'])){
        $MsgError.='<div class="col-md-12 p-2 pl-4 mb-2 alert alert-danger" style="border-radius:50px;">The Name is Required !..</div>';
    }
    if(empty($_POST['email'])){
        $MsgError.='<div class="col-md-12 p-2 pl-4 mb-2 alert alert-danger" style="border-radius:50px;">The email is required !..</div>';
    }  
    if(empty($_POST['message'])){
        $MsgError.='<div class="col-md-12 p-2 pl-4 mb-2 alert alert-danger" style="border-radius:50px;">The Message Field is Empty, say something !...</div>';
    }else if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $message = htmlentities($_POST['message']);
        $to = "victorycenterathens@gmail.com";
        $from = $email;
        $subject = 'Contact From Message';
        $message = '<b>Name : </b>"]' . $name . '<br><b>Email</b>' . $email . '<p>' . $message . '</p>';
        $headers = "From: $from\n";
        $headers .= "MIME-version : 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        mail($to, $subject, $message, $headers);        
        $MsgSuccess.='<div class="col-md-12 p-2 pl-4 alert alert-success" style=";border-radius:50px;">Message was Sent ...</div>';
   
        $_POST['name'] = '';
        $_POST['email'] = '';
        $_POST['message'] = '';
    }
    $post = array(
        'name' =>$_POST["name"],
        'email' =>  $_POST["email"],
        'message' => $_POST["message"]
    );

    foreach($post as $key => $pos){
        $values[] = $pos;
    
    }

    $_SESSION['post'] = $values;
    $_SESSION['error'] = $MsgError;
    $_SESSION['success'] = $MsgSuccess;
    
    header('Location:index.php');










