<?php session_start();?>
<?php include "sign-in.php";?>
<?php include "sign-up.php";?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <a href="index.php" class="navbar-brand">Coffee Shop</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarMenu">
               <ul class="navbar-nav mr-auto mt-2">
                   <li class="nav-item active"><a href="shop.php" class="nav-link">Shop</a></li>
                   <li class="nav-item"><a href="story.php" class="nav-link">Our Story</a></li>
                   <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
               </ul>
               <ul class="navbar-nav ml-auto mr-4 mt-2">
               <?php 
               if(isset($_SESSION['userEmail']))
               {
                echo '<li class="nav-item"><a href="logout.php" class="nav-link mr-3">Log Out</a></li>';
               }
               else
               {
                echo '<li class="nav-item"><a href="#" class="nav-link mr-3" 
                data-toggle="modal" data-target="#loginModal">Login</a></li>';
               }
               ?>
                   <li class="nav-item"><a href="cart.php" class="nav-link"><i class="fas fa-cart-plus"></i></a></li>
               </ul>
           </div>
 </nav>
 <div class="modal fade" id="loginModal" role="dialog">
           <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Welcome</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <form method="post">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="password" id="password" name="password" class="form-control mt-3" placeholder="Password" required>
                        <p class="text-center text-danger mt-4 loginStatus"></p>
                        <button type="submit" name="loginButton" id="signIn" class="btn btn-primary mt-4 mb-3 btn-block">Sign in</button>
                    </form>    
                        <a href="#" class="text-center pt-4 lead" data-dismiss="modal"
                         data-toggle="modal" data-target="#accountModal"
                         >Create account</a>
                </div>
            </div>
           </div>        
 </div>
       <div class="modal fade" id="accountModal">
           <div class="modal-dialog">
               <div class="modal-content">
                     <div class="modal-header">
                        <h4>Create Account</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                         <div class="container">
                         <form method="post">
                            <div class="row">
                                <input type="text" id="firstName" class="col-md-5  form-control" 
                                placeholder="First Name" name="firstName" required>
                                <input type="text" id="lastName" class="col-md-5 mt-3 mt-md-0 
                                form-control offset-md-2" placeholder="Last Name" name="lastName"required>
                            </div>
                         </div>
                         <input type="email" id="createEmail" class="form-control mt-3" 
                         placeholder="Email" name="createEmail" required>
                         <input type="password" id="createPassword" class="form-control mt-3" 
                         placeholder="Password" name="createPassword" required>
                         <input type="password" id="confirmPassword" class="form-control mt-3" 
                         placeholder="Confirm Password" required name="confirmPassword">
                         <p class="text-center lead mt-4 signupStatus"></p>
                         <button type="submit" id="signupButton" name="signupButton" class="btn btn-primary mt-4 mb-3 btn-block">Create Account</button>
                         </form>
                     </div>
               </div>
           </div>
       </div>