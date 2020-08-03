<?php 
        if(isset($_POST['subscribeButton']))
   {
         $subEmail=$_POST['subEmail'];
          $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
          $query="INSERT INTO subscribers(email) VALUES ('$subEmail')";
          $result=mysqli_query($connection,$query);
          echo '<span>You are now a subscriber. Congrats!</span>';
         
    }
 ?>
 <script>
 $("#subscribe-email").val("");
 </script>