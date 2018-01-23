<?php 
use Andresalice\Winelivery\Models\Cart;class Cms5a57f0e010cd3998156673_73192fd0631411abe954272148882c92Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['loggedIn'] = Auth::check();
    if($this['loggedIn'])
    {
        $this['cart'] = Cart::where("user_id","=",$this['user']->id)->get();
        $sum = 0;
        $inlay_products = [];
		$inlay_ids = [];
        foreach($this['cart'] as $c)
        {
          $sum += $c->product->price * $c->quantity;
          if($c->product->embutidos){
				foreach($c->product->embutidos as $embutido){
					$embutido->image = $embutido->featured_image->getPath();
					if(!in_array($embutido->id, $inlay_ids)){
						$inlay_products[] = $embutido;
						$inlay_ids[] = $embutido->id;
					}
				}
			}
        }
        //PRODUCTOS RANDOM CALCULO DE ESTRELLAS
        foreach($inlay_products as $r)
        {
            $r->s5 = $r->stars()->where("stars",5)->count();
            $r->s4 = $r->stars()->where("stars",4)->count();
            $r->s3 = $r->stars()->where("stars",3)->count();
            $r->s2 = $r->stars()->where("stars",2)->count();
            $r->s1 = $r->stars()->where("stars",1)->count();
            $sc = 5 * $r->s5 + 4 * $r->s4 + 3 * $r->s3 + 2 * $r->s2 + 1 * $r->s1;
            if($sc == 0){$r->total_stars = 5;}
            else{$r->total_stars = substr($sc/($r->s5+$r->s4+$r->s3+$r->s2+$r->s1), 0, 1);}
        }
        $this['inlay_products'] = $inlay_products;
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
    if($cart->product->stock >= post("q"))
    {
        $cart->quantity = post("q");
        $cart->save();
        return "true";
    }
    else
    {
        return "false";
    }
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
    $sum = 0;
    foreach($cart as $c)
    {
      $sum += $c->product->price * $c->quantity;
    }
    $cart_total = $sum;
    $cart_total_envio = $sum + 90;
    $cart_counter = Cart::where("user_id","=",$user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
    
    return ['#cart_partial' => $this->renderPartial('cart', ['cart' => $cart, 'cart_total' => $cart_total]), 
    '.cart_update_quantity' => $this->renderPartial('quantity_cart', ['cart_counter' => $cart_counter]),
    '#cart_total_id' => $this->renderPartial('cart_total', ['cart_total' => $cart_total, 'cart_total_envio' => $cart_total_envio, 'cart_counter' => $cart_counter])];
}
}
