<?php 
use Andresalice\Winelivery\Models\Order;class Cms5a5ce5ede79a5639374994_38da6ffca231ccd0d4fbc2251dbf252dClass extends \Cms\Classes\PageCode
{

public function onStart()
{
    $orders = Order::where('user_id', Auth::getUser()->id)->orderBy("id","DESC")->get();
    foreach($orders as $order)
    {
        $order->quantity = 0;
        foreach($order->porder as $porder)
        {
            $order->quantity += $porder->quantity;
        }
    }
    $this['orders'] = $orders;
}
}
