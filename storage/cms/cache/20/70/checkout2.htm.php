<?php 
use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Order;class Cms58be6aefcc5ac438283933_820976729Class extends \Cms\Classes\PageCode
{



public function onStart()
{
    $exists = Cart::where("user_id",Auth::getUser()->id)->exists();
    if($exists)
    {
        $cart = Cart::where("user_id",Auth::getUser()->id)->get();
        $this['products'] = $cart; 
        $this['address'] = Address::find($this->param('id')); 
        $order = new Order();
        $order->user_id = Auth::getUser()->id;
        $order->address_id = $this->param('id');
        $order->status = "Procesando Orden";
        $order->save();
        $sum = 0;
        foreach($cart as $c)
        {
            $sum += $c->product->price * $c->quantity;
            DB::table("product_order")->insert(['order_id' => $order->id, 'product_id' => $c->product_id, 'quantity' => $c->quantity]);
        }
        $this['cart_total'] = $sum;
        $this['cart_total_envio'] = $sum + 90;
        $this['cart_counter'] = Cart::where("user_id","=",Auth::getUser()->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
        Cart::where("user_id",Auth::getUser()->id)->delete();
    }
    else
    {
        return Redirect::to('historial');
    }
    
}
}
