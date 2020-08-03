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
                   <li class="nav-item"><a href="#" class="nav-link mr-3" 
                    data-toggle="modal" data-target="#loginModal">Login</a></li>
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
                        <input type="text" id="username" class="form-control" placeholder="Username">
                        <input type="password" id="password" class="form-control mt-3" placeholder="Password">
                        <button type="submit" class="btn btn-primary mt-4 mb-3 btn-block">Sign in</button>
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
                            <div class="row">
                                <input type="text" id="firstName" class="col-md-5  form-control" 
                                placeholder="First Name">
                                <input type="text" id="lastName" class="col-md-5 mt-3 mt-md-0 
                                form-control offset-md-2" placeholder="Last Name">
                            </div>
                         </div>
                         <input type="email" id="createEmail" class="form-control mt-3" placeholder="Email">
                         <input type="password" id="createPassword" class="form-control mt-3" 
                         placeholder="Password">
                         <input type="password" id="confirmPassword" class="form-control mt-3" 
                         placeholder="Confirm Password">
                         <button type="submit" class="btn btn-primary mt-4 mb-3 btn-block">Create Account</button>
                     </div>
               </div>
           </div>
       </div>