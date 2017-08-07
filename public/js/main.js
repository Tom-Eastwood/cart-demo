$(function(){

    $(".cart-add").on("click", function(e){
        e.preventDefault();
        addToCart($(this).attr('title') );
    });

    $(".cart-destroy").on("click", function(e){
        e.preventDefault();
        removeFromCart($(this).attr('title') );
    });
});

function addToCart(sku, e){
    $.ajax({
        type: "GET",
        url: base_url+'/cart/store/'+sku,
        success: notifyCustomer("Item as been added to your cart.")
    });
}

function notifyCustomer(notificationMessage){
    $('body').prepend(
        '<div class="alert">'+notificationMessage+'</div>'
    );

    window.setTimeout(function(){$(".alert").remove()}, 3000);
}