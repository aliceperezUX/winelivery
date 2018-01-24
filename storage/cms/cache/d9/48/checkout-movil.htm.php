<?php 
use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Order;use Andresalice\Winelivery\Models\Porder;use Andresalice\Winelivery\Models\Product;use RainLab\User\Models\User;class Cms5a67cec453f94239449536_4112123c28c8c4352bc9c1c5f1a96418Class extends \Cms\Classes\PageCode
{






public function onStart()
{
    $order = Order::find($this->param('id'));
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
        $status = $this['order'] = Order::where('id', $this->param('id'))->where('order_token', $this->param('token'))->first();
        if($status){
            $status->status = "Completada";
            $status->save();
            $products = Porder::where("order_id", $this['order']->id)->get();
            $sum = 0;
            foreach($products as $c){ 
                $sum += $c->product->price * $c->quantity;
                $uproduct = Product::find($c->product_id);
                $uproduct->stock = $uproduct->stock - $c->quantity;
                $uproduct->save();
            }
        	$this['products'] = $products; 
            $this['cart_total'] = $sum;
            $this['cart_total_envio'] = $sum + 90;
            $this['cart_counter'] = Porder::where("order_id",$this['order']->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
            
             //EMAIL TO CLIENT
            $user = User::find($status->user_id);
            $mailvars = ['cart' => $products, 'address' => $this['order']->address_id, 'cart_total' => $this['cart_total'], 'cart_total_envio' => $this['cart_total_envio'], 'cart_counter' => $this['cart_counter']];
            
            Mail::send('Orders', $mailvars, function($message) use ($user) {
            	$message->to($user->email, $user->username);
            });
            //EMAIL TO ADMIN
            $mailvars2 = ['cart' => 'cart'];
            Mail::send('Orders_admin', $mailvars2, function($message) use ($user) {
            	$message->to("wineliveryrd@gmail.com", "Luis Peña");
            });
        }
    }
    else
    {
        die("¡DETENTE AHI! ANIMAL FEROZ");
    }
}
public function check_response_hash($OrderNumber, $Amount, $AuthorizationCode, $DateTime, $ResponseCode, $IsoCode, $ResponseMessage, $ErrorDescription, $RRN, $ResponseAuthHash)
{
	$AuthKey = '6VQhjDMmD2aM6yE1J3RarMxvxqkEuTzQg8UIycGAjVg0gZOhLwU1bBQ0pWpoaDkbOQpBQqJTxm8yno7XDF9msjAkL7E6CG7HF148LD3WgdyPizN9PWK6tQjRBiwDyqyk';
	$AuthHash = $OrderNumber . $Amount . $AuthorizationCode . $DateTime . $ResponseCode . $IsoCode . $ResponseMessage . $ErrorDescription . $RRN. $AuthKey;
	$AuthHash = mb_convert_encoding($AuthHash, 'UTF-16LE', 'ASCII');
	$AuthHash = hash('sha512', $AuthHash);
	if($AuthHash === $ResponseAuthHash)
	{
		return true;
	} 
	else 
	{
		return false;
	}
}
}
