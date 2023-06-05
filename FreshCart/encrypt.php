<?php

$string = "Hassan";
$string1 = "Hassan";
$md5String =  md5($string);
$md5String1 =  md5($string);
$sha1 = sha1($string);
$belowFishEnc =  password_hash($string, PASSWORD_BCRYPT);



echo "md5 Encryption: " . md5($string)."</br>"."lenght: ". strlen($md5String)."</br>" ;
echo "md5 Encryption: " . md5($string1)."</br>"."lenght: ". strlen($md5String)."</br>" ;
echo "sha1 Encryption: " . sha1($string)."</br>"."lenght: ". strlen($sha1)."</br>";
echo "sha1 Encryption: " . sha1($string1)."</br>"."lenght: ". strlen($sha1)."</br>";


echo "Bcrypt Encryption: " . $belowFishEnc."</br>"."lenght: ". strlen($belowFishEnc)."</br>";


$signup = "Hello World !";
$md5Signup = md5($signup);


$login = "Hello World!";
$md5Login = md5($login);

$bcryptSignup = password_hash($signup,PASSWORD_BCRYPT);


// if($md5Signup === $md5Login ){

// echo "Login";



// }else{


//     echo "Login Failed";
// }



if(password_verify($login , $bcryptSignup )){

    echo "Login";
    
    
    
    }else{
    
    
        echo "Login Failed";
    }

// echo password_verify($login , $bcryptSignup );







?>