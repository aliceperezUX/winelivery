<?php 
use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Order;use Andresalice\Winelivery\Models\Porder;use Andresalice\Winelivery\Models\Product;class Cms5a6208b7b845a509113521_525583ca8a3df4e1d7fabebf55a360eeClass extends \Cms\Classes\PageCode
{





public function onStart()
{
    $this['orderData'] = $order = Order::find($this->param('id'));
    $OrderNumber = Input::get('OrderNumber');
	$Amount = Input::get('Amount');
	$AuthorizationCode = Input::get('AuthorizationCode');
	$DateTime = Input::get('DateTime');
	$ResponseCode = Input::get('ResponseCode');
	$IsoCode = Input::get('IsoCode');
	$ResponseMessage = Input::get('ResponseMessage');
	$ErrorDescription = Input::get('ErrorDescription');
	$RRN = Input::get('RRN');
	$ResponseAuthHash = Input::get('AuthHash');
    $isValid = $this->check_response_hash($OrderNumber, $Amount, $AuthorizationCode, $DateTime, $ResponseCode, $IsoCode, $ResponseMessage, $ErrorDescription, $RRN, $ResponseAuthHash);
    if($order->status != "Completada")
    {
        $user = Auth::getUser();
        $status = $this['order'] = Order::find($this->param('id'));
        $status->status = "Completada";
        $status->save();
        $products = Porder::where("order_id", $this['order']->id)->get();
        $sum = 0;
        foreach($products as $c)
        { 
            $sum += $c->product->price * $c->quantity; 
            $uproduct = Product::find($c->product_id);
            $uproduct->stock = $uproduct->stock - $c->quantity;
            $uproduct->save();
        }
    	$this['products'] = $products; 
        $this['cart_total'] = $sum;
        $this['cart_total_envio'] = $sum + 90;
        $this['cart_counter2'] = Porder::where("order_id",$this['order']->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
        
         //EMAIL TO CLIENT
        $mailvars = ['cart' => $products, 'address_id' => $this['order']->address_id, 'cart_total' => $this['cart_total'], 'cart_total_envio' => $this['cart_total_envio'], 'cart_counter' => $this['cart_counter']];
        
        Mail::send('Orders', $mailvars, function($message) use ($user) {
        	$message->to($user->email, $user->username);
        });
        //EMAIL TO ADMIN
        $mailvars2 = ['cart' => 'cart','user_name' => $user->name, 'user_surname' => $user->surname, 'user_phone' => $this['order']->telefono, 'user_address' => $this['order']->address_id];
        Mail::send('Orders_admin', $mailvars2, function($message) use ($user) {
        	$message->to("wineliveryrd@gmail.com", "Luis Peña");
        });
    }
    else
    {
        return Redirect::to("/");
    }
    /*$exists = Cart::where("user_id",Auth::getUser()->id)->exists();
    if($exists)
    {
        $cart = Cart::where("user_id",Auth::getUser()->id)->get();
        $sum = 0;
        foreach($cart as $c){ $sum += $c->product->price * $c->quantity; }
        $this['products'] = $cart; 
        $this['address'] = Address::find($this->param('id'));
        
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
        $order->status = "Procesando Orden";
        $order->save();
        
        foreach($cart as $c)
        {
            DB::table("product_order")->insert(['order_id' => $order->id, 'product_id' => $c->product_id, 'quantity' => $c->quantity]);
        }
        $this['cart_total'] = $sum;
        $this['cart_total_envio'] = $sum + 90;
        $cte = $sum + 90;
        
        $this['cart_counter'] = Cart::where("user_id","=",Auth::getUser()->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
        //EMAIL TO CLIENT
        $mailvars = ['cart' => $cart, 'address' => $this['address'], 'cart_total' => $this['cart_total'], 'cart_total_envio' => $cte, 'cart_counter' => $this['cart_counter']];
        Mail::send('Orders', $mailvars, function($message) use ($user) {
        	$message->to($user->email, $user->username);
        });
        //EMAIL TO ADMIN
        $mailvars2 = ['cart' => 'cart'];
        Mail::send('Orders_admin', $mailvars2, function($message) use ($user) {
        	$message->to("wineliveryrd@gmail.com", "Luis Peña");
        });
        
        Cart::where("user_id",Auth::getUser()->id)->delete();
    }
    else
    {
        return Redirect::to('historial');
    }*/
    
}
public function check_response_hash($OrderNumber, $Amount, $AuthorizationCode, $DateTime, $ResponseCode, $IsoCode, $ResponseMessage, $ErrorDescription, $RRN, $ResponseAuthHash)
{
	$AuthKey = '6VQhjDMmD2aM6yE1J3RarMxvxqkEuTzQg8UIycGAjVg0gZOhLwU1bBQ0pWpoaDkbOQpBQqJTxm8yno7XDF9msjAkL7E6CG7HF148LD3WgdyPizN9PWK6tQjRBiwDyqyk';
	$AuthHash = $OrderNumber . $Amount . $AuthorizationCode . $DateTime . $ResponseCode . $IsoCode . $ResponseMessage . $ErrorDescription . $RRN. $AuthKey;
	$AuthHash = mb_convert_encoding($AuthHash, 'UTF-16LE', 'ASCII');
	$AuthHash = hash('sha512', $AuthHash);
	if($AuthHash === $ResponseAuthHash){return true;} 
	else{return false;}
}
}
