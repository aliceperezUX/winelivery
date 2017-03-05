<?php 
use Andresalice\Winelivery\Models\Order;class Cms58b7727266eb0666686781_3031929141Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['orders'] = DB::table("andresalice_winelivery_orders as o")->join("product_order as po","po.order_id","=","o.id")->join("andresalice_winelivery_products as p","po.product_id","=","p.id")->groupBy("po.order_id")->select("p.*","o.*", DB::raw('SUM(p.price * po.quantity) as total'), DB::raw('SUM(po.quantity) as total_quantity'))->get();
    //$this['orders'] = Order::where("user_id",Auth::getUser()->id);
    //var_dump($this['orders']);
    //die();
}
}
