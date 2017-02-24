<?php 
use Andresalice\Winelivery\Models\Category;use Andresalice\Winelivery\Models\Newsletter;use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Wishlist;use Andresalice\Winelivery\Models\Product;class Cms58b09d0ac66a8701764008_1402982259Class extends \Cms\Classes\LayoutCode
{





public function onStart()
{
    $this['loggedIn'] = Auth::check();
    $this['categories'] = Category::get();
    $this['randomProducts'] = Product::orderByRaw("RAND()")->take(12)->get();
    if($this['loggedIn'])
    {
      $this['user'] = Auth::getUser();
      $this['cart_counter'] = Cart::where("user_id","=",$this['user']->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
      $this['wishlist_counter'] = Wishlist::where("user_id","=",$this['user']->id)->select(DB::raw('count(id) as wishlist_counter'))->first()->wishlist_counter;
    }
}
public function onAddToCart()
{
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
    $cart_counter = Cart::where("user_id","=",$user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
    return ['#cart_update_quantity' => $this->renderPartial('quantity_cart', ['cart_counter' => $cart_counter])];
}
public function onAddToWishlist()
{
    $product_id = Input::get("product_id");
    $user = Auth::getUser();
    if(!Wishlist::where("product_id","=",$product_id)->where("user_id","=",$user->id)->exists())
    {
        $w = new Wishlist();
        $w->user_id =  $user->id;
        $w->product_id  = $product_id;
        $w->save();
    }
    $wishlist_counter = Wishlist::where("user_id","=",$user->id)->select(DB::raw('count(id) as wishlist_counter'))->first()->wishlist_counter;
    return ['#wishlist_update_quantity' => $this->renderPartial('quantity_wishlist', ['wishlist_counter' => $wishlist_counter])];
}
public function onDeleteFromWishlist()
{
    $user = Auth::getUser();
    $wishlist_id = Input::get("wishlist_id");
    if(Wishlist::where("id","=",$wishlist_id)->where("user_id","=",$user->id)->exists())
    {
        $w = Wishlist::find($wishlist_id);
        $w->delete();
    }
    $wishlist = Wishlist::where("user_id","=",$user->id)->get();
    $wishlist_counter = Wishlist::where("user_id","=",$user->id)->select(DB::raw('count(id) as wishlist_counter'))->first()->wishlist_counter;
    return ['#wishlist_partial' => $this->renderPartial('wishlist', ['wishlist' => $wishlist]), '#wishlist_update_quantity' => $this->renderPartial('quantity_wishlist', ['wishlist_counter' => $wishlist_counter])];
}
public function onNewsletterForm()
{
    $exists = Newsletter::where("email","=",post("email_newsletter"))->exists();
    if($exists)
    {
        return false;
    }
    else
    {
        $n = new Newsletter();
        $n->email = post('email_newsletter');
        $n->save();
    }
}
public function onLogout()
{
    Auth::logout();
    return Redirect::to('/');
}
}
