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
    <title>Coffe Shop</title>
</head>
<body>
<?php include "navbar.php"; ?>
    <div class="header">
    </div>
    <div class="caption text-center">
        <h1>Humanity runs on coffee</h1>
        <a href="shop.php" type="button" class="btn btn-lg bg-white">Shop Now</a>
        <button class="d-none d-sm-block" id="down-arrow"><i class="fas fa-arrow-down fa-2x"></i></button>
    </div>
    <div class="container text-center products">
      <h1 class="mt-5 best-seller">Best Sellers</h1>
        <div class="row mt-4">
    <?php 
       readfromDB("popularImages");
    ?>
        </div>
    </div>
    <div class="coffee-image"></div>

<?php include "subscribe.php";?>

<?php include "footer.php";?>

    <script src="jquery.js" type="text/javascript"></script>
    <script src="script.js?v=<?php echo time(); ?>" type="text/javascript"></script>
</body>
</html>