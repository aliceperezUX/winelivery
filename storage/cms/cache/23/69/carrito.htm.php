<?php 
use Andresalice\Winelivery\Models\Cart;class Cms58b776a2e0f7c446029338_3070228723Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['loggedIn'] = Auth::check();
    if($this['loggedIn'])
    {
        $this['cart'] = Cart::where("user_id","=",$this['user']->id)->get();
        $sum = 0;
        foreach($this['cart'] as $c)
        {
          $sum += $c->product->price * $c->quantity;
        }
        $this['cart_total'] = $sum;
        $this['cart_total_envio'] = $sum + 90;
        $date = date("Y-m-d H:i:s");
        $now = new DateTime(); 
        $now->setTimezone(new DateTimeZone('America/Santo_Domingo'));
        if($now->format('H') > 11 and $now->format('H') < 21 and $now->format('A') == "PM")
        {
            $this['now'] = false;
        }
        else
        {
           // $this['now'] = true;
           $this['now'] = false;
        }
    }
}
public function onUpdateQuantity()
{
    $cart = Cart::find(post("c_id"));
    $cart->quantity = post("q");
    $cart->save();
    return Redirect::back();
}
public function onDeleteFromCart()
{
    $user = Auth::getUser();
    $cart_id = Input::get("cart_id");
    if(Cart::where("id","=",$cart_id)->where("user_id","=",$user->id)->exists())
    {
        $w = Cart::find($cart_id);
        $w->delete();
    }
    $cart = Cart::where("user_id","=",$user->id)->get();
    $cart_counter = Cart::where("user_id","=",$user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
    return ['#cart_partial' => $this->renderPartial('cart', ['cart' => $cart]), '#cart_update_quantity' => $this->renderPartial('quantity_cart', ['cart_counter' => $cart_counter])];
}
}
