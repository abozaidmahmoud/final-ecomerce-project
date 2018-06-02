$(function(){

$(".cart-img-product").on('click',function(){

$('#'+$(this).data('form')).submit();

})



//Product Page ADD TO CART Function !
$('.form-btn').click(function() {

    
     /*
     
          var frm=$("#"+$(this).data('form'))

	$("#"+$(this).data('form')).submit(function (e) {


    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (data) {
            console.log('Submission was successful.');
        },
        error: function (data) {
            console.log('An error occurred.');
        },
    });
}); // end ajax

    $("#"+$(this).data('form')).submit();

});*/


    $("#"+$(this).data('form')).submit();

}); //end function





// Sumbit Button For ProductDetails Page
$('[type="submit"]').on('click',function(){
var qty=$('.qty').val();
$('[name="qty"]').val(qty);
$('#buy').submit();

});


$('#ex1').zoom();
$('#ex2').zoom();
$('#ex3').zoom();
$('#ex4').zoom();
$('#ex5').zoom();
$('#ex6').zoom();
$('#ex7').zoom();
$('#ex8').zoom();





});