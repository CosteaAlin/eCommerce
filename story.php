<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <style>
    .image-container{
    background-image: url(resources/story.jpg);
    background-size: cover;
    height: 100vh;
    width: 100vw;
    background-attachment:fixed;
    background-size: 100% 100%;
    margin-top:8rem;
    }
    </style>
    <title>Coffe Shop</title>
</head>
<body>
    <?php include "navbar.php"; ?>
       <div class="container" style="margin-top:8rem;">
       <h1 class="mt-5">Our Story</h1>
       <p class="lead mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod tortor vel erat rhoncus finibus. Nunc semper dui ac nisi placerat, vel consectetur arcu venenatis. Cras neque turpis, dapibus ac aliquam eu, euismod non arcu. Curabitur sagittis a dolor ut ullamcorper. Praesent ullamcorper quis massa sed fringilla. Praesent bibendum turpis.</p>
       <p class="lead mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non tristique arcu. Duis aliquet lacus justo, in ornare risus sodales sit amet. Curabitur a nisi est. Sed posuere, purus et dignissim condimentum, dolor velit pulvinar mi, ut pharetra libero justo ac orci. Vivamus dolor est, tempus nec nisl at, mollis.</p>
       </div>
       <div class="image-container"></div>
       <div class="container" style="margin-top:6rem; margin-bottom:8rem;">
       <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quam justo, rhoncus eget euismod a, posuere at est. Etiam ut dictum nunc. In id ultrices leo. Ut eleifend nibh augue, et semper lacus viverra id. Aliquam semper tortor nec sem</h3>
       <p class="lead mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar tincidunt dolor eget hendrerit. Praesent ligula arcu, auctor elementum mauris id, condimentum sagittis nibh. Donec orci augue, pellentesque vitae consectetur eu, malesuada et metus. Sed quis tempus lectus. Etiam vel.</p>
       </div>
       <?php include "footer.php";?>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="script.js"></script>
</body>
</html>