<?php

if(isset($_POST['submit'])){
    //collect form data
    $cName = $_POST['cName'];
    $cAddr = $_POST['cAddr'];
    $cType = $_POST['cType'];
    $cEmail = $_POST['cEmail'];

    if($cName == '' OR $cAddr == '' OR $cType == ''){
        $error[] = 'All fields are required'; 
    }
    // check if email is valid
    if(!filter_var($cEmail, FILTER_VALIDATE_EMAIL)){
        $error[] = 'Please enter a valid email for your company ';
    }
    echo "<script>alert('Generated')</script>"; 
}

// if their are error display them

if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
    
}

?>