<?php
include 'users.php';

if(isset($_POST['login']))
{   
    $email=$_POST['email'];
    $password=$_POST['password'];
    $count=0;
    foreach ($users as $user) {
            if ($user['email'] == $email && $user['password'] == $password) 
            {
                echo "Login successful";
                echo "<h3>$user[name] logged in successfully<h3>";
                // header("Location: deshboard.php");
                header("Refresh: 5; url=deshboard.php");
                $count++;
                break;
            }
    }
    if($count==0) {
        echo "Invalid email or password";
        // header("Location: login.php");
        header("Refresh: 2; url=login.php");
    }
}
?>