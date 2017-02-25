<?php 
use Andresalice\Winelivery\Models\Wishlist;use Andresalice\Winelivery\Models\Cart;class Cms58b0a19cc26cb999323288_3880705282Class extends \Cms\Classes\PageCode
{


public function onStart()
{
    $this['wishlist'] = Wishlist::where("user_id","=",$this['user']->id)->get();
}
public function onMoveToCart()
{
    $wishlist_id = Input::get("wishlist_id");
    $product_id = Input::get("product_id");
    $user = Auth::getUser();
    
    if(Cart::where("product_id","=",$product_id)->where("user_id","=",$user->id)->exists())
    {
        $id_cart = Cart::where("product_id","=",$product_id)->where("user_id","=",$user->id)->select("id")->first();
        $w = Cart::find($id_cart->id);
        $w->quantity += 1;
        $w->save();
    }
    else
    {
        $w = new Cart();
        $w->user_id =  $user->id;
        $w->product_id  = $product_id;
        $w->quantity = 1;
        $w->save();
    }
    $delete = Wishlist::find($wishlist_id);
    $delete->delete();
    $wishlist = Wishlist::where("user_id","=",$user->id)->get();
    $wishlist_counter = Wishlist::where("user_id","=",$user->id)->select(DB::raw('count(id) as wishlist_counter'))->first()->wishlist_counter;
    $cart_counter = Cart::where("user_id","=",$user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
    return ['#wishlist_partial' => $this->renderPartial('wishlist', ['wishlist' => $wishlist]), '#wishlist_update_quantity' => $this->renderPartial('quantity_wishlist', ['wishlist_counter' => $wishlist_counter]), '#cart_update_quantity' => $this->renderPartial('quantity_cart', ['cart_counter' => $cart_counter])];
}
}
