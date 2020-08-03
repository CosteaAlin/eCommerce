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
    <title>Blog</title>
    <style>
        body{
            overflow-x:hidden;
        }
      img{
          width: 33rem;
          height:25rem;
      }
      .custom-div{
        margin-top:150px;
      }
    </style>
</head>
<body>
    <?php include "navbar.php";?>
     <div class="container-fluid text-center custom-div mb-5">
         <div class="first row">
             <div class="col-md-6">
                    <img src="resources/blog1.jpg " class="animated pt-5">
                      <h2 class="mt-3">Lorem Ipsum</h2>
                       <a href="#" data-toggle="modal" data-target="#jpg1" >Read more</a>
              <div class="modal fade" id="jpg1" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4>Lorem Ipsum</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus urna non libero fringilla dignissim. Etiam vitae tellus tortor. Mauris malesuada cursus efficitur. Integer mollis massa mattis neque sagittis viverra. Nam vitae volutpat diam, ac vestibulum ex. Integer dapibus lorem eu tempus sollicitudin. Quisque sed ante erat. Donec purus orci, tristique vel ullamcorper at, pulvinar a risus. Etiam sit amet.</p>
                     </div>
                     <div class="modal-footer">
                         <button data-dismiss="modal" class="btn-danger btn-lg">Close</button>
                     </div>
                  </div>
               </div>        
              </div>
             </div>
            <div class="col-md-6">
                    <img src="resources/blog2.jpg"  class=" pt-5">
                    <h2 class="mt-3">Lorem Ipsum</h2>
                       <a href="#" data-toggle="modal" data-target="#jpg2" >Read more</a>
              <div class="modal fade" id="jpg2" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4>Lorem Ipsum</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus urna non libero fringilla dignissim. Etiam vitae tellus tortor. Mauris malesuada cursus efficitur. Integer mollis massa mattis neque sagittis viverra. Nam vitae volutpat diam, ac vestibulum ex. Integer dapibus lorem eu tempus sollicitudin. Quisque sed ante erat. Donec purus orci, tristique vel ullamcorper at, pulvinar a risus. Etiam sit amet.</p>
                     </div>
                     <div class="modal-footer text-rigth">
                         <button data-dismiss="modal" class="btn-danger btn-lg">Close</button>
                     </div>
                  </div>
               </div>        
              </div>

           </div>
         </div>
         <div class="second row ">
            <div class="col-md-6">
                   <img src="resources/blog3.jpg"  class=" pt-5">
                   <h2 class="mt-3">Lorem Ipsum</h2>
                       <a href="#" data-toggle="modal" data-target="#jpg3" >Read more</a>
              <div class="modal fade" id="jpg3" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4>Lorem Ipsum</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus urna non libero fringilla dignissim. Etiam vitae tellus tortor. Mauris malesuada cursus efficitur. Integer mollis massa mattis neque sagittis viverra. Nam vitae volutpat diam, ac vestibulum ex. Integer dapibus lorem eu tempus sollicitudin. Quisque sed ante erat. Donec purus orci, tristique vel ullamcorper at, pulvinar a risus. Etiam sit amet.</p>
                     </div>
                     <div class="modal-footer text-rigth">
                         <button data-dismiss="modal" class="btn-danger btn-lg">Close</button>
                     </div>
                  </div>
               </div>        
              </div>
            </div>
            <div class="col-md-6">
                   <img src="resources/blog4.jpg"  class=" pt-5">
                   <h2 class="mt-3">Lorem Ipsum</h2>
                       <a href="#" data-toggle="modal" data-target="#jpg4" >Read more</a>
              <div class="modal fade" id="jpg4" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4>Lorem Ipsum</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus urna non libero fringilla dignissim. Etiam vitae tellus tortor. Mauris malesuada cursus efficitur. Integer mollis massa mattis neque sagittis viverra. Nam vitae volutpat diam, ac vestibulum ex. Integer dapibus lorem eu tempus sollicitudin. Quisque sed ante erat. Donec purus orci, tristique vel ullamcorper at, pulvinar a risus. Etiam sit amet.</p>
                     </div>
                     <div class="modal-footer text-rigth">
                         <button data-dismiss="modal" class="btn-danger btn-lg">Close</button>
                     </div>
                  </div>
               </div>        
              </div>
            </div>
         </div>
     </div>
    <?php include "footer.php";?>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="script.js?v=<?php echo time(); ?>" type="text/javascript"></script>
</body>
</html>