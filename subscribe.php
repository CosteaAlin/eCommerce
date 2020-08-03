<?php include "sub.php";?>
<div class="subscribe container text-center">
        <h1>What`s the Dill?</h1>
        <p class="lead">Sign up with your email address to receive news and updates.</p>
        <button class="btn btn-lg" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>
    </div>
    <div class="modal fade" id="subscribeModal" role="dialog">
           <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Subscribe</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
        <form method="post" class="subscribe-form">
                  <label for="subscribe-email">Email</label>
                  <input type="email" name="subscribe-email" class="form-control" id="subscribe-email" required>
                  <button class="btn btn-info btn-block mt-4" name="subscribeButton" id="subscribe-btn">Subscribe</button>
                  <p class="sub-status text-center pt-4 lead"></p>
        </form>     
       </div>
   </div>
  </div>        
 </div>