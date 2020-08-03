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
    $(".subscribe-form").submit(function(event){
      event.preventDefault();   
        var subEmail=$("#subscribe-email").val();
        var submit=$("#subscribe-btn").val();
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
     $(".dismissButton").on('click', function(){
        var $el=$(this).closest('form');
        var dismissButton=$el.find('.dismissButton').val();
        var cartName=$el.find('.cartName').val();
        $.ajax({
            url:'functions.php',
            method:'post',
            cache: false,
            data:
            {
                dismissButton:dismissButton,
                cartName:cartName,
            },
            success: function(response)
            {
               console.log(response);
            }
        });
     });
 });

