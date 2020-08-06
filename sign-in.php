<?php 
if(isset($_POST['loginButton']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="SELECT * FROM users WHERE email ='$email'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
        $passCheck= password_verify($pass,$row['password']);
            if($passCheck==false)
                    echo'Wrong password. Please try again.';
            else
                {
                  $_SESSION['userEmail']=$row['email'];
                  echo 'success';
                }
  }
    else
    {
      echo'You don`t have an account. Please create one.';
    }
}
?>