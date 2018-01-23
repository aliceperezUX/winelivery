$(document).ready(function(){
    $('.btnShare').click(function(){
        elem = $(this);
        postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));
        return false;
    });
    
    $("input[name=quantity]").bind('keyup change', function(){
        
        changeQuantity($(this).data('id'));
    });
});


function changeQuantity(c_id)
{
    $("#quantity_min").fadeOut("fast");
    var q  = $('#qNumber'+c_id).val();
    if(q > 0)
    {
        $.request('onUpdateQuantity', {data: {c_id:c_id, q:q}, success: function(data) { if(data.result === "false"){$('#quantityMessage').fadeIn();} else{location.reload();} }});
    }
    else
    {
        $('#procesar_orden_button').click(function(e) {
            e.preventDefault();
            //do other stuff when a click happens
        });
        $("#quantity_min").fadeIn("fast");
    }
    
}

function addToWishlist(product_id)
{
    $.request('onAddToWishlist', {data: {product_id:product_id}});
}

function addToCart(product_id)
{
    $.request('onAddToCart', {data: {product_id:product_id}});
}

function moveToCart(wishlist_id, product_id)
{
    $.request('onMoveToCart', {data: {wishlist_id:wishlist_id, product_id:product_id}});
}

function deteleFromWishlist(wishlist_id)
{
    $.request('onDeleteFromWishlist', {data: {wishlist_id:wishlist_id}});
}

function deteleFromCart(cart_id)
{
    $.request('onDeleteFromCart', {data: {cart_id:cart_id}});
}


