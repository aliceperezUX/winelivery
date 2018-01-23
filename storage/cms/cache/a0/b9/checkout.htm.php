<?php 
use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Order;class Cms5a57f0f2aa38b381565569_a283cc998d9df4f2d99bf6b3f4f020abClass extends \Cms\Classes\PageCode
{



public function onStart()
{
    $exists = Cart::where("user_id",Auth::getUser()->id)->exists();
    if(!$exists)
    {
        return Redirect::to('/');
    }
}
public function onSendToAddress()
{
    $address_id = post('address_id');
    $exists = Cart::where("user_id", Auth::getUser()->id)->exists();
    if($exists)
    {
        $cart = Cart::where("user_id",Auth::getUser()->id)->get();
        $sum = 0;
        foreach($cart as $c){ $sum += $c->product->price * $c->quantity; }
        $this['products'] = $cart; 
        $this['address'] = Address::find($address_id);
        
        $address = "Sector: " . $this['address']->sector . "       Calle: " . $this['address']->calle . "       Residencial: " . $this['address']->residencial . "      No.:" . $this['address']->numero . "       Proximo a: " . $this['address']->proximo;
        
        //$sum = $sum + 90;
        $suma = $sum + 90;
        $user = Auth::getUser();
        $order = new Order();
        $order->user_id = $user->id;
        $order->name = $user->name;
        $order->surname = $user->surname;
        $order->email = $user->username;
        $order->address = $address;
        $order->telefono = $this['address']->telefono;
        $order->celular = $this['address']->celular;
        $order->total = "RD$" . $suma;
        $order->status = "Pendiente";
        $order->order_token = str_random(61);
        $order->rnc = "NO RNC";
        $order->pago = "SIN PAGO";
        $order->cambio = "SIN CAMBIO";
        $order->save();
        
        $this['order_id'] = $order->id;
        
        foreach($cart as $c)
        {
            DB::table("product_order")->insert(['order_id' => $order->id, 'product_id' => $c->product_id, 'quantity' => $c->quantity]);
        }
        $this['cart_total'] = $sum;
        $this['cart_total_envio'] = $sum + 90;
        $cte = $sum + 90;
        
        $this['cart_counter'] = Cart::where("user_id","=",Auth::getUser()->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
        Cart::where("user_id",Auth::getUser()->id)->delete();
        return Redirect::to('orden/' . $order->id);
    }
    else
    {
        return Redirect::to('historial');
    }
}
}
