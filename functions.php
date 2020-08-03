<?php 

if(isset($_POST['submitButton']))
{
    echo 'here';
    $name=$_POST['item_name'];
    addtoCart($name);
  
}
if(isset($_POST['dismissButton']))
{
    $name=$_POST['cartName'];
    deletefromCart($name);
}

if(isset($_POST['quantityInput']))
{
    $name=$_POST['quantityName'];
    $quantity=$_POST['quantityInput'];
    updateCart($name,$quantity);
}
 function readfromDB($table)
{
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="SELECT * FROM $table";
    $result=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($result))
    {   
        echo '<div class="col-md-6 mt-4">';
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
        $checkName=$row['name'];
        $checkQuery="SELECT * FROM cart WHERE name = '$checkName'";?>
        <form method="post">
        <input type="hidden" name="item_name" class="item_name" name="item_name" value="<?php echo $row['name'];?>">
        <?php if(mysqli_num_rows(mysqli_query($connection,$checkQuery))==0)
          echo  '<button class="btn add-tocart submitButton" name="submitButton">Add to Cart</button>';
          else
          echo '<button class="btn add-tocart" disabled style="cursor:not-allowed;">In Cart</button>';
         ?>
        </form>
        <?php echo '<h3>'.$row['name'].'</h3>';
        echo '<h5 class="mb-4">$'.$row['price'].' USD</h5>';
        echo '</div>';
    }
    mysqli_close($connection);
}
function addtoCart($name)
{
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="INSERT INTO cart(name,quantity) VALUES ('$name',1)";
    $result=mysqli_query($connection,$query);
    mysqli_close($connection);
}   
  
function displayCart()
{
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="SELECT * FROM cart";
    $result=mysqli_query($connection,$query);
    $totalPrice=0;
    while($row=mysqli_fetch_array($result))
    {
         $name=$row['name'];
         $secondQuery="SELECT * FROM coffeeproducts WHERE name = '$name'";

         if(mysqli_num_rows(mysqli_query($connection,$secondQuery))==0)
         {
            $secondQuery="SELECT * FROM teaproducts WHERE name = '$name'";
         }
         $secondResult=mysqli_query($connection,$secondQuery);
         $secondRow=mysqli_fetch_array($secondResult);?>
        <div class="row pt-4 pb-4 align-items-center border-bottom">
        <div class="col-md-4">
        <form method="post" class="d-flex">
        <input type="hidden" name="cartName" class="cartName" value="<?php echo $name;?>">
        <button class="btn btn-sm btn-danger dismissButton">&times;</button>
        </form>
        <?php echo '<img class="" src="data:image/jpeg;base64,'.base64_encode( $secondRow['image'] ).'"/>';
         echo '</div>'; 
         echo '<div class="col-md-4 text-left"><h6>'.$secondRow['name'].'</h6>';
         echo '<form method="post">';?>
         <input type="hidden" class="quantityName" value="<?php echo $name;?>">
        <?php echo '<input type="number" class="ml-4 quantityInput" name="quantityInput" 
         value='.$row['quantity'].' min="1" style="width:3rem;">';
         echo '</form>';
         echo '</div>';
         $price=$row['quantity']*$secondRow['price'];
         $totalPrice=$totalPrice+$price;
         echo '<h6 class="col-md-4">$'.$price.' USD</h6>';
         echo '</div>';
          
    }
    if($totalPrice>0)
    {
    echo '<span><h4 class="text-center mt-5">Total Price: $'.$totalPrice.' USD</h6></span>';
    echo '<button class="btn btn-lg btn-info mb-5">Check Out</button>';
    }
    else
    echo '<h5>You have nothing in your shopping cart.</h5>';
    mysqli_close($connection);
}

  function deletefromCart($name)
  {
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="DELETE FROM cart where name ='$name'";
    $result=mysqli_query($connection,$query);
    mysqli_close($connection);
  }

  function updateCart($name,$quantity)
  {
    $connection= mysqli_connect('localhost','root','','coffee') or die($connection->connect_error);
    $query="UPDATE cart SET quantity = $quantity where name ='$name'";
    $result=mysqli_query($connection,$query);
    mysqli_close($connection);
  }
?>