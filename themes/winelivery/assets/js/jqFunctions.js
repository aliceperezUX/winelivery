function changeQuantity(c_id)
{
    var q  = $('#qNumber'+c_id).val();
    $.request('onUpdateQuantity', {data: {c_id:c_id, q:q}});
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


