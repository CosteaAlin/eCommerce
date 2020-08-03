<!DOCTYPE html>
<html lang="en">
<head>
<?php include "functions.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <style>
    h2{
        margin-bottom:3rem;
    }
    .cart{
        margin-top:11rem;
        margin-bottom:4rem;
    }
      img{
          width:10rem;
      }
      button{
          position:relative;
          bottom:-6rem;
      }
    </style>
    <title>Cart</title>
</head>
<body>
<?php include "navbar.php";?>
        <div class="container cart text-center">
        <h2 class="text-left">Shopping Cart</h2>  
                <?php displayCart(); ?>
        </div>
<?php include "footer.php";?>   
<script src="jquery.js" type="text/javascript"></script>
<script src="script.js?v=<?php echo time(); ?>" type="text/javascript"></script>   
</body>
</html>