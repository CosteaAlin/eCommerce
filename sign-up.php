<?php

if(isset($_POST['signupButton']))
{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $createEmail=$_POST['createEmail'];
    $createPassword=$_POST['createPassword'];
    $confirmPassword=$_POST['confirmPassword'];
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="SELECT * FROM users WHERE email = '$createEmail'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==0)
    { 
        if($createPassword !== $confirmPassword)
        {
            echo'Your passwords don`t match.';
        }
        else
        {
            $hashedPass=password_hash($createPassword, PASSWORD_DEFAULT);
            $insertQuery="INSERT INTO users(email, password, FirstName, LastName) VALUES 
            ('$createEmail', '$hashedPass', '$firstName', '$lastName')";
            $insertResult=mysqli_query($connection,$insertQuery);
            echo' Your account has been created. You can now log in.';
        }
    }
    else
    {
        echo' You already have an account!';
    }
}
?>
<script>
$("#firstName, #lastName, #createEmail, #createPassword, #confirmPassword").val("");
</script>