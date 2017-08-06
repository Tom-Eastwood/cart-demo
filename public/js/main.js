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
        success: console.log('success')
    });
}

function removeFromCart(sku, e){
    $.ajax({
        type: "GET",
        url: base_url+'/cart/destroy/'+sku,
        success: console.log('destroyed')
    });
}