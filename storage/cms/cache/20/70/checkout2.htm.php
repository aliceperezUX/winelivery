<?php 
use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Order;class Cms58c85e108c382451238799_3396726095Class extends \Cms\Classes\PageCode
{



public function onStart()
{
    $exists = Cart::where("user_id",Auth::getUser()->id)->exists();
    if($exists)
    {
        $cart = Cart::where("user_id",Auth::getUser()->id)->get();
        $sum = 0;
        foreach($cart as $c){ $sum += $c->product->price * $c->quantity; }
        $this['products'] = $cart; 
        $this['address'] = Address::find($this->param('id'));
        $address = "Sector: " . $this['address']->sector . " Calle: " . $this['address']->calle . " Residencial: " . $this['address']->residencial . " No.:" . $this['address']->numero . " Proximo a: " . $this['address']->proximo;
        
        $user = Auth::getUser();
        $order = new Order();
        $order->user_id = $user->id;
        $order->name = $user->name;
        $order->surname = $user->surname;
        $order->email = $user->username;
        $order->address = $address;
        $order->telefono = $this['address']->telefono;
        $order->celular = $this['address']->celular;
        $order->total = $sum + 90;
        $order->status = "Procesando Orden";
        $order->save();
        
        foreach($cart as $c)
        {
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
