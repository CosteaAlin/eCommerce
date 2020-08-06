$(document).ready(function(){
    $('#down-arrow').click(function(event)
    {
        event.preventDefault();
        $("html, body").animate({scrollTop: $('.best-seller').offset().top},1500);
        return false;
    })

    $('.category').click(function(){
        var category=$(this).attr('id');
       if(category=='for-tea')
       {
           $('.coffee').addClass('d-none');
           $('.tea').removeClass('d-none');
       }
       else if(category=='for-coffee')
       {
           $('.tea').addClass('d-none');
           $('.coffee').removeClass('d-none');
       }
       else{
        $('.tea').removeClass('d-none');
        $('.coffee').removeClass('d-none');
       }
    })
}); 

$(document).ready(function(){
    $("#subButton").on('click', function(event){
      event.preventDefault();
        var subEmail=$("#subEmail").val();
        var submit=$("#subButton").val();
        $(".sub-status").load("sub.php", {
            subEmail: subEmail,
            subscribeButton: submit,
        });  
    });
 });

 $(document).ready(function(){
     $(".quantityInput").on('change', function(event){
         var $el=$(this).closest('form');
         var quantityInput= $el.find('.quantityInput').val();
         var quantityName=$el.find(".quantityName").val();
         location.reload(true);
         $.ajax({
             url:'functions.php',
             method: 'post',
             cache: false,
             data: 
             {
                quantityInput:quantityInput, 
                quantityName:quantityName,
             },
             success: function(response){
                 console.log(response);
             }
         });
     });
 });

 $(document).ready(function(){
    $("#signIn").on('click', function(e){  
        var email=$("#email").val();
        var pass=$("#password").val();
        var submit=$("#signIn").val();
         $.ajax({
             url: 'sign-in.php',
             method: 'post',
             data:
             {
                loginButton:submit,
                email:email,
                password:pass,
             },
             success: function(response){
                 if(response=="success")
                   {
                      location.reload();
                   }
                   else
                   {
                    e.preventDefault(); 
                    document.querySelector(".loginStatus").innerHTML = response;
                   }
             }
         });
              
    });
});

$(document).ready(function(e){
    $("#signupButton").on('click', function(e){
      e.preventDefault();   
        var firstName=$("#firstName").val();
        var lastName=$("#lastName").val();
        var createEmail=$("#createEmail").val();
        var createPassword=$("#createPassword").val();
        var confirmPassword=$("#confirmPassword").val();
        var signupButton=$("#signupButton").val();
        $(".signupStatus").load("sign-up.php", {
             firstName:firstName,
             lastName:lastName,
             createEmail:createEmail,
             createPassword:createPassword,
             confirmPassword:confirmPassword,
             signupButton:signupButton,
        });  
    });
 });