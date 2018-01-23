<?php 
use Andresalice\Winelivery\Models\Cart;use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Order;use Andresalice\Winelivery\Models\Porder;class Cms5a6789709d38a737625165_1909220bf40b7d5601d923f89eb61239Class extends \Cms\Classes\PageCode
{




public function onStart()
{
    $this['ResponseCode'] = Input::get("ResponseCode");
    $this['order'] = Order::where('id', $this->param('id'))->where('order_token', $this->param('token'))->first();
    if($this['order']){
        $this['MerchantId'] = $MerchantId = "39232170019";
    	$this['MerchantName'] = $MerchantName = "WineliveryRD";
    	$this['MerchantType'] = $MerchantType = "Venta de Vinos";
    	$CurrencyCode = "$";
    	$OrderNumber = $this['order']->id;
    	$this['ammount'] = $Amount = str_replace("RD$", "", $this['order']->total) . "00";
    	$Itbis = "0000";
    	$this['ApprovedUrl'] = $ApprovedUrl = "http://www.wineliveryrd.com/checkout-movil/" . $this['order']->id . "/" . $this['order']->order_token;
    	$this['DeclinedUrl'] = $DeclinedUrl = "http://www.wineliveryrd.com/orden-movil/" . $this['order']->id . "/" . $this['order']->order_token;
    	$this['CancelUrl'] = $CancelUrl = "http://www.wineliveryrd.com/orden-movil/" . $this['order']->id . "/" . $this['order']->order_token;
    	$this['ResponsePostUrl'] = $ResponsePostUrl ="http://www.wineliveryrd.com/orden-movil/" . $this['order']->id . "/" . $this['order']->order_token;
    	$UseCustomField1 = "0";
    	$CustomField1Label = "Custom1";
    	$CustomField1Value = "Value1";
    	$UseCustomField2 = "0";
    	$CustomField2Label = "Custom2";
    	$CustomField2Value = "Value2";
    	$AuthKey = '6VQhjDMmD2aM6yE1J3RarMxvxqkEuTzQg8UIycGAjVg0gZOhLwU1bBQ0pWpoaDkbOQpBQqJTxm8yno7XDF9msjAkL7E6CG7HF148LD3WgdyPizN9PWK6tQjRBiwDyqyk';
    	$AuthHash = $MerchantId . $MerchantName . $MerchantType . $CurrencyCode . $OrderNumber . $Amount . $Itbis . $ApprovedUrl . $DeclinedUrl . $CancelUrl . $ResponsePostUrl . $UseCustomField1 . $CustomField1Label . $CustomField1Value . $UseCustomField2 . $CustomField2Label . $CustomField2Value . $AuthKey;
    	$this['AuthHash'] = hash('sha512', $AuthHash);
    	 
    	$products = Porder::where("order_id", $this['order']->id)->get();
        $sum = 0;
        foreach($products as $c){ $sum += $c->product->price * $c->quantity; }
    	$this['products'] = $products; 
        $this['cart_total'] = $sum;
        $this['cart_total_envio'] = $sum + 90;
        $this['cart_counter'] = Porder::where("order_id",$this['order']->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
    }
}
public function onRncForm()
{
    $o = Order::find($this->param('id'));
    $o->rnc = Input::get("rnc");
    $o->cambio = Input::get("cambio");
    if(Input::get('payment') == "1"){
        $o->pago = "Tarjeta";
    } else {
        $o->pago = "Efectivo";
    }
    $o->save();
}
}
